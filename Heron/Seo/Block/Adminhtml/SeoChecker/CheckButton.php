<?php
/**
 * © Ratnakanthan
 */

namespace Heron\Seo\Block\Adminhtml\SeoChecker;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
use Heron\Seo\Helper\Data;

/**
 * Class CheckButton
 * @package Heron\Seo\Block\Adminhtml\SeoChecker
 */
class CheckButton implements ButtonProviderInterface
{
    /**
     * @var Data
     */
    protected $helper;

    /**
     * CheckButton constructor.
     *
     * @param Data $helper
     */
    public function __construct(Data $helper)
    {
        $this->helper = $helper;
    }

    /**
     * @return array
     */
    public function getButtonData()
    {
        if (!$this->helper->isEnabled()) {
            return [];
        }

        return [
            'label'      => __('Check On-page'),
            'class'      => 'action-secondary save',
            'on_click'   => 'jQuery("#mageplaza-seo-form").submit();',
            'sort_order' => 85
        ];
    }
}
