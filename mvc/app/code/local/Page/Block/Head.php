<?php
class Page_Block_Head extends Core_Block_Template
{
    protected $_css =[];
    protected $_js =[];
 
    public function __construct()
    {
        $this->setTemplate("page/head.phtml");
    }
    public function addjs($file)
    {
        return $this->_js[]=$file;
    }
    public function addcss($file)
    {
        return $this->_css[] = $file;
    }
    public function getcss()
    {
        return $this->_css;
    }
    public function getjs()
    {
       return $this->_js;
    }
}
