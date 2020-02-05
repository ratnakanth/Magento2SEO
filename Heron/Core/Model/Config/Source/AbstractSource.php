<?php
/**
 * Heron
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Heron.com license that is
 * available through the world-wide-web at this URL:
 * https://www.Heron.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Heron
 * @package     Heron_Core
 * @copyright   Copyright (c) Heron (https://www.Heron.com/)
 * @license     https://www.Heron.com/LICENSE.txt
 */

namespace Heron\Core\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class AbstractSource
 * @package Heron\Core\Model\Config\Source
 */
abstract class AbstractSource implements ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [];

        foreach ($this->toArray() as $value => $label) {
            $options[] = compact('value', 'label');
        }

        return $options;
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    abstract public function toArray();
}
