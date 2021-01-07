<?php

namespace Espl\AdminGrid\Block;

class ContactUs extends \Magento\Framework\View\Element\Template
{
    protected $_contactusFactory;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Espl\AdminGrid\Model\ContactUsFactory $contactusFactory
	)
	{
		$this->_contactusFactory = $contactusFactory;
		parent::__construct($context);
    }
    
	public function getPostCollection(){
		$contactus = $this->_contactusFactory->create();
		return $contactus->getCollection();
	}
}