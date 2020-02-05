<?php
/**
 * © Ratnakanthan
 */
namespace Heron\Seo\Model\Config\Source;

use Magento\Catalog\Model\ResourceModel\Product\Attribute\CollectionFactory;
use Magento\Framework\Option\ArrayInterface;

/**
 * Class ProductAttribute
 * @package Heron\Shopbybrand\Model\Config\Source
 */
class Attribute implements ArrayInterface
{
    /**
     * @var CollectionFactory
     */
    protected $_collectionFactory;

    /**
     * Attribute constructor.
     *
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->_collectionFactory = $collectionFactory;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $attributes = $this->_collectionFactory->create()->addVisibleFilter();
        $arrAttribute = [];

        foreach ($attributes as $attribute) {
            $arrAttribute[] = [
                'label' => $attribute->getFrontendLabel(),
                'value' => $attribute->getAttributeCode()
            ];
        }

        return $arrAttribute;
    }
}
