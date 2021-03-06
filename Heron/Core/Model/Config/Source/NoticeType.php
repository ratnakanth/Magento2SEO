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

/**
 * Class NoticeType
 * @package Heron\Core\Model\Config\Source
 */
class NoticeType extends AbstractSource
{
    const TYPE_ANNOUNCEMENT = 'announcement';
    const TYPE_NEWUPDATE    = 'new_update';
    const TYPE_MARKETING    = 'marketing';

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [
            self::TYPE_ANNOUNCEMENT => __('Announcement'),
            self::TYPE_NEWUPDATE    => __('New & Update extensions'),
            self::TYPE_MARKETING    => __('Promotions ')
        ];
    }
}
