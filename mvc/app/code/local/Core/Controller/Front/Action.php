<?php
class Core_Controller_Front_Action
{
    protected $_layout = null;
    public function getLayout()
    {
        if (is_null($this->_layout)) {

            $this->_layout = mage::getBlock('core/layout');
            //echo get_class($block);die;

        }
        return $this->_layout;
    }
}