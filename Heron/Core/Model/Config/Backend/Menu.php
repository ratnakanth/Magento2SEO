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

namespace Heron\Core\Model\Config\Backend;

use Magento\Config\Model\ResourceModel\Config\Data;
use Magento\Framework\App\Cache\Type\Block;
use Magento\Framework\App\Cache\Type\Config;
use Magento\Framework\App\Config\Value;

/**
 * Class Menu
 * @package Heron\Core\Model\Config\Backend
 */
class Menu extends Value
{
    /**
     * @var string
     */
    protected $_resourceName = Data::class;

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        if ($this->isValueChanged()) {
            $this->cacheTypeList->cleanType(Block::TYPE_IDENTIFIER);
            $this->cacheTypeList->cleanType(Config::TYPE_IDENTIFIER);
        }

        return parent::afterSave();
    }
}
