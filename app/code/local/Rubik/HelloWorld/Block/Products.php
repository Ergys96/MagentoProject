<?php

//ModuleName_Block_NameofFile
class Rubik_HelloWorld_Block_Products extends Mage_Core_Block_Template
{

    public function getProducts()
    {
        $_productCollection = Mage::getModel('catalog/product')
        ->getCollection()
        ->addAttributeToSelect('*')
        ->addAttributeToFilter('price', array('lt' => 80)) //lt = lower than
        ->load();
        $_productCollection->getSelect()->limit(20); //only first 20 products
        return $_productCollection;
    }
}

?>