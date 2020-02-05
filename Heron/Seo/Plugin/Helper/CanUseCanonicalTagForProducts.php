<?php
/**
 * © Ratnakanthan
 */

namespace Heron\Seo\Plugin\Helper;

use Magento\Catalog\Helper\Product;
use Heron\Seo\Helper\Data as HelperData;

/**
 * Class CanUseCanonicalTagForProducts
 * @package Heron\Seo\Plugin\Helper
 */
class CanUseCanonicalTagForProducts
{
    /**
     * @var HelperData
     */
    protected $_helper;

    /**
     * CanUseCanonicalTagForProducts constructor.
     *
     * @param HelperData $helper
     */
    function __construct(HelperData $helper)
    {
        $this->_helper = $helper;
    }

    /**
     * @param Product $product
     * @param $result
     *
     * @return mixed
     */
    public function afterCanUseCanonicalTag(Product $product, $result)
    {
        if ($this->_helper->isEnabled()) {
            return $this->_helper->getDuplicateConfig('product_canonical_tag');
        }

        return $result;
    }
}
