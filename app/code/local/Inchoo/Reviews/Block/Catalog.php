<?php

class Inchoo_Reviews_Block_Catalog extends Mage_Core_Block_Template
{
    public function getReviewData()
    {
        $_product = $this->product;
        $reviewCollection = Mage::getModel('review/review')->getCollection()->setPageSize(1)
                                ->addStoreFilter(Mage::app()->getStore()->getId())
                                ->addStatusFilter(Mage_Review_Model_Review::STATUS_APPROVED)
                                ->addEntityFilter('product', $_product->getId())
                                ->setDateOrder()
                                ->addRateVotes();

//        $_items = $reviewCollection->getItems();
        return $reviewCollection;
    }
}