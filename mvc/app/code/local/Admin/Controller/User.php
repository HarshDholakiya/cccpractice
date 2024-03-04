<?php
class Admin_Controller_User extends Core_Controller_Admin_Action{
    protected $_allowedActions = array('login');
    public function loginAction(){
        //echo 123;
        $layout = $this->getLayout();
        $layout->removeChild('header')->removeChild('footer');
        // $layout->getChild('head')->addcss('header.css');
        // $layout->getChild('head')->addcss('customer/account/login.css');
        $child = $layout->getchild('content');
        $loginForm = $layout->createBlock('admin/user');
        $child->addChild('login', $loginForm);
        $layout->toHtml();

        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getParams('login');
            $email = isset($data['email']) ? $data['email'] : '';
            $password = isset($data['password']) ? $data['password'] : '';
            $adminid= 1;
                $email1 = "hh@gmail.com";
                $password1 = 123;
                
                if($email==$email1  && $password==$password1 ){
                    Mage::getSingleton('core/session')
                    ->set('logged_in_admin_user_id',$adminid);
                //     echo "<script>
                //     alert('Customer register successfully');
                //     location. href='{$address}/dashboard';
                // </script>";
                $this->setRedirect("admin/catalog_category/form");
                }
                else{
                    $this->setRedirect("admin/user/login");
                }
                

    //             // $customerCollection = Mage::getModel('customer/customer')->getCollection();
    //             $customerCollection->addFieldToFilter('email', $email);
    //             $customerCollection->addFieldToFilter('password', $password);
    //             // $customerCollection->getData();
    //              echo "<pre>";
    //         //    print_r($customerCollection);
            
             
    //             // echo $count;
             
    //                 $address = Mage::getBaseUrl('customer/account');
    //                 Mage::getSingleton('core/session')
    //                     ->set('logged_in_customer_id',$customerId);
    //                 //     echo "<script>
    //                 //     alert('Customer register successfully');
    //                 //     location. href='{$address}/dashboard';
    //                 // </script>";
    //                 $this->setRedirect("customer/account/dashboard");
                    
    //             }
    //             else{
    //                 // $address = Mage::getBaseUrl('customer/account');
    //             //     echo "<script>
    //             //     alert('email_id or password wrong');
    //             //     location. href='{$address}/login';
    //             // </script>";
    //             $this->setRedirect("customer/account/login");
    //             }
    //         }
    // }
}
}
}