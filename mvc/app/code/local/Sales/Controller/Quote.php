<?php

class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function addAction()
    {
        $quoteData = $this->getRequest()
            ->getParams('sales_quote');
        // echo "<pre>";
        //  print_r($quoteData);
        //  die;
        $quote = Mage::getSingleton("sales/quote")->addProduct($quoteData);
        $this->setRedirect('cart/index/form');
    }
    // public function updateAction()
    // {
    //     $quoteData = $this->getRequest()
    //         ->getParams();
    //     // echo "<pre>";
    //     // print_r($quoteData);
    //     $quote = Mage::getSingleton("sales/quote")->updateProduct($quoteData);
    // }
    public function deleteAction()
    {
        $quoteData = [
            'quote_id' => Mage::getSingleton('core/request')->getParams('quote_id'),
            'item_id' => Mage::getSingleton('core/request')->getParams('item_id')
        ];
        // echo "<pre>";
        // print_r($quoteData);
        $quote = Mage::getSingleton("sales/quote")->deleteProduct($quoteData);
        $this->setRedirect('cart/index/form');
    }
    public function addressAction()
    {
        $quoteId = Mage::getSingleton('core/session')->get("quote_id");
       
        // print_r($quoteId);
        
        // echo "<pre>";
        if($quoteId){
            $addressData = Mage::getSingleton('core/request')->getParams('sales_quote_customer');
             Mage::getSingleton('sales/quote')->addAddress($addressData);
            

             $this->setRedirect('cart/checkout/form');
        }
    else{
        $this->setRedirect('cart/index/form');
    }
    }
    public function customeraddressAction(){
        $quoteId = Mage::getSingleton('core/session')->get("quote_id");
        if($quoteId){
            $addressData = Mage::getSingleton('core/request')->getParams('sales_quote_customer');
            Mage::getSingleton('sales/quote')->addAddressPermenant($addressData);
            $this->setRedirect('cart/checkout/form');
        }
        else{
            $this->setRedirect('cart/index/form');
        }
    }
    public function placeOrderAction(){
        $paymentData = Mage::getSingleton('core/request')->getParams('quote_payment_method');
        $shippingData = Mage::getSingleton('core/request')->getParams('quote_shipping_method');
        Mage::getSingleton('sales/quote')->addPayment($paymentData);
        Mage::getSingleton('sales/quote')->addShipping($shippingData);
        Mage::getSingleton('sales/quote')->convert();
        Mage::getSingleton('core/session')->remove('quote_id');
        // $this->setRedirect('');

    }
}