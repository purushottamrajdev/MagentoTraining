<?php
namespace Espl\AdminGrid\Controller\ContactUs;

    use Magento\Framework\App\Action\Action;
    use Magento\Framework\Controller\ResultFactory;    

class SubmitQuery extends Action
{
	protected $resultRedirect;
	protected $_contactusFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,		
        \Espl\AdminGrid\Model\ContactUsFactory $contactusFactory,
        \Magento\Framework\Controller\ResultFactory $result
		)
	{
        $this->_contactusFactory = $contactusFactory;
        $this->resultRedirect=$result;
		return parent::__construct($context);
	}

	public function execute()
	{
        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        $data = $this->getRequest()->getPost();
        // print_r($data);
        // exit;
        $model = $this->_contactusFactory->create();//return the instance of model

        $model->addData([
			"name" => $data['name'],
			"email" => $data['email'],
			"phone" => $data['phone'],
			"query" => $data['query']
			]);

        $saveData = $model->save();
        if($saveData){
            $this->messageManager->addSuccess( __('Your Request Submitted Successfully !') );
        }
		return $resultRedirect;
	}
}