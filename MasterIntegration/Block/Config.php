<?php
declare(strict_types=1);

namespace OficialFarma\MasterIntegration\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\Registry;
use Magento\Customer\Model\SessionFactory;

class Config extends Template
{
    /**
     * @var Registry
     */
    protected $registry;

    /**
     * @var SessionFactory
     */
    protected $customerSession;

    /**
     * @param Registry $registry
     * @param SessionFactory $customerSession
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        Registry $registry,
        SessionFactory $customerSession,
        Template\Context $context,
        array $data = []
    ) {
        $this->registry = $registry;
        $this->customerSession = $customerSession;
        parent::__construct($context, $data);
    }
}