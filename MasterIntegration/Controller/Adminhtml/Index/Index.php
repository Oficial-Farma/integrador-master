<?php
declare(strict_types=1);

namespace OficialFarma\MasterIntegration\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Index extends Action implements HttpGetActionInterface
{
    /**
     * @return ResponseInterface|ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->set(__('Master Integration'));
        return $resultPage;
    }
}
