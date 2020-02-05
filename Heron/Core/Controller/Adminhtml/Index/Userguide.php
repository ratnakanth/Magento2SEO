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

namespace Heron\Core\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;

/**
 * Class Userguide
 * @package Heron\Core\Controller\Adminhtml\Index
 */
class Userguide extends Action
{
    /**
     * Authorization level of a basic admin session
     */
    const ADMIN_RESOURCE = 'Heron_Core::userguide';

    /**
     * @return ResponseInterface|ResultInterface|void
     */
    public function execute()
    {
        $this->_response->setRedirect(
            'https://heron.co.uk'
        );
    }
}
