<?php
    declare(strict_types=1);

    namespace Espl\HelloWorld\Controller\Page;

    //use Magento\Framework\Controller\Result\Json;
    use Magento\Framework\App\Action\Action;
    use Magento\Framework\Controller\ResultFactory;
    use Magento\Framework\Controller\Result\Page;

    class View extends Action
    {
        public function execute()
        {
            // /** @var Json $jsonResult */
            // $jsonResult = $this->resultFactory->create(ResultFactory::TYPE_JSON);
            // $jsonResult->setData([
            // 'message' => 'Hello World'
            // ]);
            // return $jsonResult;

             /** @var Page $resultPage */
            return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        }
    }
?>
