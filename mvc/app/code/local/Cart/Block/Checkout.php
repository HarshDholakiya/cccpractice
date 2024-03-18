<?php
class Cart_Block_Checkout extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('cart/checkout.phtml');
    }  
    public function getAddress(){
        $id = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        // print_r($id);
        
        $list = Mage::getModel('customer/customer')->getCollection()->addFieldToFilter('customer_id',$id);
        return $list->getData();
    }
    public function getQuoteId(){
        return Mage::getSingleton('core/session')->get('quote_id');
    }
    public function getCustomerAllAddress()
    {
        $customerId = Mage::getSingleton('core/session')
            ->get('logged_in_customer_id');
        $customerAddressModel = Mage::getModel('customer/address');
        return $customerAddressModel->getCollection()
            ->addFieldToFilter('customer_id', $customerId)
            ->getData();
    }
    public function getPaymentMethods()
    {
        return [
            'card' => 'Credit or Debit Card',
            'digital_wallet' => 'Digital Wallet',
            'upi' => 'UPI',
            'net_banking' => 'Net Banking',
            'cod' => 'Cash On Delivery'
        ];
    }
    public function getShippingMethods()
    {
        return [
            'normal_day' => 'Normal Day Shipping',
            'same_day' => 'Same Day Shipping',
            'international' => 'International Shipping'
        ];
    }
}