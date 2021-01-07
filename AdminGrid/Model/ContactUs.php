<?php
namespace Espl\AdminGrid\Model;
class ContactUs extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'contactus';

	protected $_cacheTag = 'contactus';//a unique identifier for use within caching

	protected $_eventPrefix = 'contactus';//a prefix for events to be triggered

	protected function _construct()//this method will called when model is intiantiated
	{
		$this->_init('Espl\AdminGrid\Model\ResourceModel\ContactUs');
	}

	public function getIdentities()//it will return unique identifier for model
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
