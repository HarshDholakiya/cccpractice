<?php
class Sales_Model_Quote extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Sales_Model_Resource_Quote';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote';
        $this->_modelClass = 'sales/quote';
    }
    public function initQuote()
    {
        $quoteId = Mage::getSingleton('core/session')->get('quote_id');
        print_r($quoteId);
        $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        print_r($customerId);
        $exstingquote = Mage::getModel('sales/quote')->getCollection()
        ->addFieldToFilter('order_id',0)
        ->addFieldToFilter('customer_id',$customerId)->getFirstItem();
        // $this->load($quoteId);
        // var_dump(!is_null($exstingquote));
        if(!is_null($exstingquote)){
            Mage::getSingleton('core/session')->set('quote_id',$exstingquote->getId());
            $this->load($exstingquote->getId());
        }
        else{
            if (!$quoteId) {
                $quote = Mage::getModel('sales/quote')
                    ->setData(['tax_percent' => 8, 'grand_total' => 0])
                    ->save();
                Mage::getSingleton('core/session')
                    ->set('quote_id', $quote->getId());
                $quoteId = $quote->getId();
    
                $this->load($quoteId);
            } else {
                $this->load($quoteId);
            }
        }

        // echo "<pre>";
       
        return $this;
    }

    public function getItemCollection()
    {
        return Mage::getModel('sales/quote_item')->getCollection()
            ->addFieldToFilter('quote_id', $this->getId());
    }
    public function getOrderCollection()
    {
        return Mage::getModel('sales/quote_customer')->getCollection()
            ->addFieldToFilter('quote_id', $this->getId())->getFirstItem();
    }
    public function getPaymentCollection()
    {
        return Mage::getModel('sales/quote_payment')->getCollection()
            ->addFieldToFilter('quote_id', $this->getId())->getFirstItem();
    }
    public function getShippingCollection()
    {
        return Mage::getModel('sales/quote_shipping')->getCollection()
            ->addFieldToFilter('quote_id', $this->getId())->getFirstItem();
    }


    protected function _beforeSave()
    {
        $grandTotal = 0;
        foreach ($this->getItemCollection()->getData() as $_item) {
            $grandTotal += $_item->getRowTotal();
        }
        if ($this->getTaxPercent()) {
            $tax = round($grandTotal / $this->getTaxPercent(), 2);
            $grandTotal = $grandTotal + $tax;
        }
        $this->addData('grand_total', $grandTotal);
    }

    public function addProduct($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel("sales/quote_item")
                ->addItem(
                    $this,
                    $request['product_id'],
                    $request['qty'],
                    isset ($request['item_id'])
                    ? $request['item_id'] : null
                );
        }
        $this->save();

    }
    public function updateProduct($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel("sales/quote_item")->updateItem($this, $request['product_id'], $request['qty']);
        }

        $this->save();

    }
    public function deleteProduct($request)
    {

        $this->initQuote();
        // print_r($this);
        if ($this->getId()) {

            Mage::getModel("sales/quote_item")->deleteItem($request['quote_id'], $request['item_id']);
        }


        $this->save();

    }
    public function addAddress($addressData)
    {
        $quoteCustomerId = Mage::getSingleton('core/session')->get('quote_customer_id');
        $modelName = Mage::getSingleton('sales/quote_customer');
        $modelName->setData($addressData);
        if ($quoteCustomerId) {
            $modelName->addData('quote_customer_id', $quoteCustomerId)
                ->save();

        } else {
            $modelName->save();
            $quoteCustomerId = $modelName->getId();
            Mage::getSingleton('core/session')->set('quote_customer_id', $quoteCustomerId);
        }
    }
    public function convert()
    {
        $this->initQuote();
        if ($this->getId()) {
            
            // echo 9890;
            $order = $this->quoteToOrder();
            $this->quoteItemToOrderItem($order);
            $this->quoteCustomerToOrderCustomer($order);
            $payment = $this->quoteShippingToOrderShipping($order);
            $shipping = $this->quotePaymentToOrderPayment($order);
            $this->getOrderStatusHistory($order->getId());

            $this->addData("order_id", $order->getId())->save();

            $order->addData('payment_id', $payment->getId())
                ->addData('shipping_id', $shipping->getId())
                ->save();
        }
    }
    public function quoteToOrder()
    {
        if ($this->getId()) {
            return Mage::getModel('sales/order')
                ->setData($this->getData())
                ->removeData('quote_id')
                ->removeData('payment_id')
                ->removeData('shipping_id')
                ->removeData('customer_id')
                ->addData('status','pending')
                ->save();
        }
    }
    public function quoteItemToOrderItem($order)
    {
        if ($this->getId()) {
            foreach ($this->getItemCollection()->getData() as $_item) {
                $data = Mage::getModel('catalog/product')->load($_item->getProductId());
                Mage::getModel('sales/order_item')
                    ->setData($_item->getData())
                    ->removeData('quote_id')
                    ->removeData('item_id')
                    ->addData('product_name', $data->getName())
                    ->addData('product_color', $data->getColor())
                    ->addData('order_id', $order->getId())
                    ->save();
                $updatedInventory = $data->getInventory() - $_item->getQty();
                $data->addData('inventory',$updatedInventory)->save();
                
            }
        }
    }
    public function quoteCustomerToOrderCustomer($order)
    {
        if ($this->getId()) {
            $customerdata = Mage::getModel('sales/quote_customer')->getCollection()
                ->addFieldToFilter('quote_id', $this->getId())->getFirstItem();
            $customerordermodel = Mage::getModel('sales/order_customer');
            $customerordermodel->setData($customerdata->getData())
                ->removeData('quote_customer_id')
                ->removeData('quote_id')
                ->addData('order_id', $order->getId())
                ->save();

        }
    }
    public function quotePaymentToOrderPayment($order)
    {
        if ($this->getId()) {
            $paymentData = Mage::getModel('sales/quote_payment')->getCollection()
                ->addFieldToFilter('quote_id', $this->getId())->getFirstItem();
            $paymentordermodel = Mage::getModel('sales/order_payment');
            // print_r($this->getPaymentCollection());
            return $paymentordermodel->setData($paymentData->getData())
                ->removeData('quote_id')
                ->removeData('payment_id')
                ->addData('order_id', $order->getId())
                ->save();
        }
    }
    public function quoteShippingToOrderShipping($order)
    {
        if ($this->getId()) {
            $shippingdata = Mage::getModel('sales/quote_shipping')->getCollection()
                ->addFieldToFilter('quote_id', $this->getId())->getFirstItem();
            $shippingordermodel = Mage::getModel('sales/order_shipping');
            return $shippingordermodel->setData($shippingdata->getData())
                ->removeData('quote_id')
                ->removeData('shipping_id')
                ->addData('order_id', $order->getId())
                ->save();

        }
    }
    public function addAddressPermenant($addressData)
    {
        // echo "<pre>";
        // print_r($addressData);
        $CustomerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        $modelName = Mage::getSingleton('customer/address');
        $modelName->setData($addressData)->removeData('email')->removeData('quote_id');
        // print_r($modelName);
        if ($CustomerId) {
            $modelName->addData('customer_id', $CustomerId)
                ->save();
        }
    }
    public function addPayment($payment)
    {
        $this->initQuote();
        if ($this->getId()) {
            $id = Mage::getModel("sales/quote_payment")->addPaymentMethod($this, $payment)->getId();
            $this->addData('payment_id', $id);
        }
        $this->save();
    }
    public function addShipping($shipping)
    {
        $this->initQuote();
        if ($this->getId()) {
            $id = Mage::getModel('sales/quote_shipping')->addShippingMethod($this, $shipping)->getId();
            $this->addData('shipping_id', $id);
        }
        $this->save();
    }
    public function getOrderStatusHistory($order){
        Mage::getModel('sales/order_history')->setData(

            ['order_id'=>$order,      
            'from_status'=>'pending',
            'action_by'=>0                      
            ]
        )->save();

    }
}