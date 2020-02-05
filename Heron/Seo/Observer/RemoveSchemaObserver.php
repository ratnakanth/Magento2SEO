<?php
/**
 * © Ratnakanthan
 */

namespace Heron\Seo\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Heron\Seo\Helper\Data as HelperData;

/**
 * Class RemoveSchemaObserver
 * @package Heron\Seo\Observer
 */
class RemoveSchemaObserver implements ObserverInterface
{
    /**
     * @var HelperData
     */
    protected $_helperData;

    /**
     * RemoveSchemaObserver constructor.
     *
     * @param HelperData $helperData
     */
    public function __construct(HelperData $helperData)
    {
        $this->_helperData = $helperData;
    }

    /**
     * @param Observer $observer
     *
     * @return $this|void
     */
    public function execute(Observer $observer)
    {
        $layout = $observer->getData('layout');

        if (!$this->_helperData->isEnabled()) {
            return $this;
        }

        if ($this->_helperData->getRichsnippetsConfig('enable_product')) {
            $layout->getUpdate()->addHandle('mpseo_remove_schema');
        }

        return $this;
    }
}
