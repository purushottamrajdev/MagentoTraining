<?php
 namespace Espl\AdminGrid\Controller\Adminhtml\ContactUs;
 
 class Index extends \Magento\Backend\App\Action
 {
     protected $resultPageFactory = false;
 
     public function __construct(
         \Magento\Backend\App\Action\Context $context,//it represent the application context
         \Magento\Framework\View\Result\PageFactory $resultPageFactory
     )
     {
         parent::__construct($context);
         $this->resultPageFactory = $resultPageFactory;
     }
 
     public function execute()
     {
         $resultPage = $this->resultPageFactory->create();
         $resultPage->getConfig()->getTitle()->prepend((__('Customer Queries')));
 
         return $resultPage;

        //  echo 'inside controller';
        // die();
     } 
 }
?>