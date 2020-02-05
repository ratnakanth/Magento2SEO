<?php
/**
 * © Ratnakanthan
 */

namespace Heron\Seo\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class PriceValidUntil
 * @package Heron\Seo\Model\Config\Source
 */
class PriceValidUntil implements ArrayInterface
{
    const NONE        = 'none';
    const PLUS_7      = '7days';
    const PLUS_30     = '30days';
    const PLUS_60     = '60days';
    const PLUS_1_YEAR = '1year';
    const CUSTOM      = 'custom';

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'label' => __('None'),
                'value' => self::NONE
            ],
            [
                'label' => __('+7 days'),
                'value' => self::PLUS_7
            ],
            [
                'label' => __('+30 days'),
                'value' => self::PLUS_30
            ],
            [
                'label' => __('+60 days'),
                'value' => self::PLUS_60
            ],
            [
                'label' => __('+1 year'),
                'value' => self::PLUS_1_YEAR
            ],
            [
                'label' => __('Custom'),
                'value' => self::CUSTOM
            ]
        ];
    }
}
