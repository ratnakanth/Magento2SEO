<?php
/**
 * © Ratnakanthan
 */

namespace Heron\Seo\Setup;

use Magento\Catalog\Model\Category;
use Magento\Catalog\Model\Product;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

/**
 * Class UpgradeData
 * @package Heron\Seo\Setup
 */
class UpgradeData implements UpgradeDataInterface
{
    /**
     * @var EavSetupFactory
     */
    protected $eavSetupFactory;

    /**
     * UpgradeData constructor.
     *
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        if (version_compare($context->getVersion(), '2.0.1', '<')) {
            $this->removeAttribute($eavSetup, Product::ENTITY, 'mp_meta_robots');
            $this->removeAttribute($eavSetup, Product::ENTITY, 'mp_seo_og_description');
            $this->removeAttribute($eavSetup, Category::ENTITY, 'mp_meta_robots');
        }
    }

    /**
     * Remove attribute
     *
     * @param $eavSetup
     * @param $model
     * @param $id
     */
    public function removeAttribute($eavSetup, $model, $id)
    {
        if ($eavSetup->getAttributeId($model, $id)) {
            $eavSetup->removeAttribute($model, $id);
        }
    }
}
