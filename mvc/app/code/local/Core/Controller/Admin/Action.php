<?php
class Core_Controller_Admin_Action extends Core_Controller_Front_Action
{
    protected $_allowedActions = [];
    
    public function init()
    {
        // print_r( $this);
        $this->getLayout()->setTemplate('core/admin.phtml');
        $this->getRequest()->getActionName();
        if (
            !in_array($this->getRequest()->getActionName(), $this->_allowedActions) &&
            !Mage::getSingleton('core/session')->get("logged_in_admin_user_id")
        ) {
            $this->setRedirect('admin/user/login');
        }
        return $this;
    }

}