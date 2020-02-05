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

namespace Heron\Core\Plugin;

use Magento\Backend\Model\Menu\Builder\AbstractCommand;
use Heron\Core\Helper\AbstractData;

/**
 * Class MoveMenu
 * @package Heron\Core\Plugin
 */
class MoveMenu
{
    const Heron_CORE = 'Heron_Core::menu';

    /**
     * @var AbstractData
     */
    protected $helper;

    /**
     * MoveMenu constructor.
     *
     * @param AbstractData $helper
     */
    public function __construct(AbstractData $helper)
    {
        $this->helper = $helper;
    }

    /**
     * @param AbstractCommand $subject
     * @param $itemParams
     *
     * @return mixed
     */
    public function afterExecute(AbstractCommand $subject, $itemParams)
    {
        if ($this->helper->getConfigGeneral('menu')) {
            if (strpos($itemParams['id'], 'Heron_') !== false
                && isset($itemParams['parent'])
                && strpos($itemParams['parent'], 'Heron_') === false) {
                $itemParams['parent'] = self::Heron_CORE;
            }
        } elseif ((isset($itemParams['id']) && $itemParams['id'] === self::Heron_CORE)
                || (isset($itemParams['parent']) && $itemParams['parent'] === self::Heron_CORE)) {
            $itemParams['removed'] = true;
        }

        return $itemParams;
    }
}
