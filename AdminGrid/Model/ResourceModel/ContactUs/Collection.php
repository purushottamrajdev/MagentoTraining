<?php
namespace Espl\AdminGrid\Model\ResourceModel\ContactUS;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'contactus_id';
	protected $_eventPrefix = 'espl_admingrid_collection';
	protected $_eventObject = 'contactus_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Espl\AdminGrid\Model\ContactUs', 'Espl\AdminGrid\Model\ResourceModel\ContactUs');
	}

}
