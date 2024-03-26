<?php
class Customer_Controller_Account extends Core_Controller_Front_Action
{
    protected $_allowActions = ['login','register'];

    // public function init(){
    //     $this->getRequest()->getActionName();
    //     if(!in_array($this->getRequest()->getActionName(),$this->_allowActions) &&
    //             !Mage::getSingleton('core/session')->get("logged_in_customer_id")){
    //         $this->setRedirect('customer/account/login');
    //     }
    // }
    public function registerAction()
    {
        $layout = $this->getLayout();
        $layout->removeChild('header')->removeChild('footer');
        // $layout->getChild('head')->addcss('header.css');
        $layout->getChild('head')->addcss('customer/account/register.css');
        // $layout->getChild('head')->addcss('footer.css');
        $child = $layout->getchild('content');
        $regForm = $layout->createBlock('customer/account_register');
        $child->addChild('register', $regForm);
        $layout->toHtml();
    }
    // public function saveAction()
    // {
    //     echo "<pre>";
    //     $customerData = $this->getRequest()->getParams('customer');
    //     // print_r($data);
        
    //     $product = Mage::getModel('customer/customer')
    //         ->setData($customerData);


    //     $product->save();


    //     print_r($product);
    // }
     public function saveAction()
    {
        echo "<pre>";
        $customerData = $this->getRequest()->getParams('customer');
        // print_r($data);
        
        $product = Mage::getModel('customer/customer');
        $customerCollection = $product->getCollection();
        $existingCustomer= $customerCollection->addFieldToFilter('customer_email',$customerData['customer_email'])->getData();
        $address = Mage::getBaseUrl('customer/account');
        if(count($existingCustomer)){
          echo "<script>
          alert('Email already exists');
          location.href='{$address}/register';
          </script>";

        
        }

       else{
        echo "<script>
        alert('correct');
        location.href='{$address}/login';
        
        </script>";
       }

        // $product->save();


        // print_r($product);
    }
    public function loginAction()
    {
        $layout = $this->getLayout();
        $layout->removeChild('header')->removeChild('footer');
        // $layout->getChild('head')->addcss('header.css');
        $layout->getChild('head')->addcss('customer/account/login.css');
        $child = $layout->getchild('content');
        $loginForm = $layout->createBlock('customer/account_login');
        $child->addChild('login', $loginForm);
        $layout->toHtml();
        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getParams('login');
            if ($data) {
                $email = isset($data['customer_email']) ? $data['customer_email'] : '';
                $password = isset($data['password']) ? $data['password'] : '';
                $customerCollection = Mage::getModel('customer/customer')->getCollection();
                $customerCollection->addFieldToFilter('customer_email', $email);
                $customerCollection->addFieldToFilter('password', $password);
                // $customerCollection->getData();
                 echo "<pre>";
            //    print_r($customerCollection);
            
                $count = 0;
                $customerId = 0;
                foreach ($customerCollection->getData() as $row) {
                    // print_r($row);
                    $count++;
                    $customerId = $row->getId();
                }
                // echo $count;
                if($count){
                    $address = Mage::getBaseUrl('customer/account');
                    Mage::getSingleton('core/session')
                        ->set('logged_in_customer_id',$customerId);
                    Mage::getSingleton('sales/quote')->initQuote();
                    
                    //     echo "<script>
                    //     alert('Customer register successfully');
                    //     location. href='{$address}/dashboard';
                    // </script>";
                    $this->setRedirect("customer/account/dashboard");
                    
                }
                else{
                    // $address = Mage::getBaseUrl('customer/account');
                //     echo "<script>
                //     alert('email_id or password wrong');
                //     location. href='{$address}/login';
                // </script>";
                $this->setRedirect("customer/account/login");
                }
            }
        }

    }
    public function dashboardAction(){
  
    $layout = $this->getLayout();
    $layout->getChild('head')->addcss('header.css');
    $layout->getChild('head')->addcss('customer/account/dashboard.css');
    $layout->getChild('head')->addcss('footer.css');
    $child = $layout->getchild('content');
    $dashForm = $layout->createBlock('customer/account_dashboard');
    $child->addChild('dashboard', $dashForm);
    $layout->toHtml();                  
    }
    public function forgetpassword(){

    }
    public function logoutAction(){
        Mage::getSingleton('core/session')->remove('quote_id');
       Mage::getSingleton('core/session')->remove('logged_in_customer_id');
       $this->setRedirect('customer/account/login');
        
    }
}