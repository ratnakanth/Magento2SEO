<?php
/**
 * © Ratnakanthan
 */

namespace Heron\Seo\Plugin\Helper;

use Magento\Catalog\Helper\Category;
use Heron\Seo\Helper\Data as HelperData;

/**
 * Class CanUseCanonicalTagForCategories
 * @package Heron\Seo\Plugin\Helper
 */
class CanUseCanonicalTagForCategories
{
    /**
     * @var HelperData
     */
    protected $_helper;

    /**
     * CanUseCanonicalTagForCategories constructor.
     *
     * @param HelperData $helper
     */
    function __construct(HelperData $helper)
    {
        $this->_helper = $helper;
    }

    /**
     * @param Category $category
     * @param $result
     *
     * @return mixed
     */
    public function afterCanUseCanonicalTag(Category $category, $result)
    {
        if ($this->_helper->isEnabled()) {
            return $this->_helper->getDuplicateConfig('category_canonical_tag');
        }

        return $result;
    }
}
