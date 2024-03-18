<?php
class Sales_Model_Quote_Item extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Sales_Model_Resource_Quote_Item';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote_Item';
        $this->_modelClass = 'sales/quote_item';
    }

    public function getProduct()
    {
        return Mage::getModel('catalog/product')->load($this->getProductId());
    }

    protected function _beforeSave()
    {
        if ($this->getProductId()) {
            $price = $this->getProduct()->getPrice();
            // echo $price;
            // die;
            $this->addData('price', $price);
            $this->addData('row_total', $price * $this->getQty());
        } else {
        }
    }
    
    public function addItem(Sales_Model_Quote $quote, $productId, $qty, $itemId = null)
    {
        // print_r(get_class($this));
        $item = $this->getCollection()
            ->addFieldToFilter('product_id', $productId)
            ->addFieldToFilter('quote_id', $quote->getId())
            ->getFirstItem()
        ;
        // var_dump($item);
// die;
        if ($item) {
            if (!$itemId) {
                $qty += $item->getQty();
                $this->setId($item->getId());
            } else {
                $this->setId($itemId);
            }
        }
        $this->addData('product_id', $productId)
        ->addData('quote_id', $quote->getId())
        ->addData('qty', $qty);
        // print_r($this);
        // if ($item) {
        //     $this->setId($item->getId());
        // }
        $this->save();

        return $this;
    }
    public function updateItem(Sales_Model_Quote $quote, $productId, $qty)
    {
        $item = $this->getCollection()
            ->addFieldToFilter('product_id', $productId)
            ->addFieldToFilter('quote_id', $quote->getId())
            ->getFirstItem()
        ;

        $this->setData(
            [
                'quote_id' => $quote->getId(),
                'product_id' => $productId,
                'qty' => $qty,
            ]
        );
        if ($item) {
            $this->setId($item->getId());
        }
        $this->save();

        return $this;
    }
    public function deleteItem($quoteId, $itemId)
    {
        // echo 123;
        // print_r($quote);
        $item = $this->getCollection()
            ->addFieldToFilter('quote_id', $quoteId)
            ->addFieldToFilter('item_id', $itemId)
            ->getFirstItem();
            if ($item) {
                $this->setId($item->getId());
            }
        // print_r($item);
        $item->delete();

        return $this;
    }
}