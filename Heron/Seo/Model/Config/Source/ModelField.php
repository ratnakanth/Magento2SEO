<?php
/**
 * © Ratnakanthan
 */
namespace Heron\Seo\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class ModelField
 * @package Heron\Seo\Model\Config\Source
 */
class ModelField implements ArrayInterface
{
    const GTIN8  = 'gtin8';
    const GTIN13 = 'gtin13';
    const GTIN14 = 'gtin14';
    const MPN    = 'mpn';

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'label' => __('gtin8'),
                'value' => self::GTIN8
            ],
            [
                'label' => __('gtin13'),
                'value' => self::GTIN13
            ],
            [
                'label' => __('gtin14'),
                'value' => self::GTIN14
            ],
            [
                'label' => __('mpn'),
                'value' => self::MPN
            ]
        ];
    }
}
