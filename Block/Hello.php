<?php

namespace Dangs\HelloModule\Block;

class Hello extends \Magento\Framework\View\Element\Template
{
	protected $_categoryFactory;

	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Magento\Catalog\Model\CategoryFactory $categoryFactory
	)
	{
		$this->_categoryFactory = $categoryFactory;
		parent::__construct($context);
	}

	public function getCategory()
	{
	    $categoryId = 3;
	    $category = $this->_categoryFactory->create()->load($categoryId);
	    return $category;
	}

	public function getProductCollection()
	{
	     return $this->getCategory()->getProductCollection()->addAttributeToSelect('*')->setPageSize(10); 
	}

	public function returnHello()
	{
		$category = $this->getCategory();
		return __('Product under category: '.$category->getName());
	}
}