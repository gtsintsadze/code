<?php

namespace Tsintsadze\WeatherApp\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
    protected PageFactory $pageFactory;

    protected ResultFactory $resultFactory;

    public function __construct(PageFactory $pageFactory, ResultFactory $resultFactory)
    {
        $this->pageFactory = $pageFactory;
        $this->resultFactory = $resultFactory;
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }
}
