<?php
/**
 * © Ratnakanthan
 */

namespace Heron\Seo\Plugin;

use Magento\Review\Block\Product\ReviewRenderer;
use Heron\Seo\Helper\Data as HelperData;

/**
 * Class RemoveReview
 * @package Heron\Seo\Plugin
 */
class RemoveReview
{
    protected $_helperData;

    /**
     * RemoveReview constructor.
     *
     * @param HelperData $helperData
     */
    public function __construct(HelperData $helperData)
    {
        $this->_helperData = $helperData;
    }

    /**
     * @param ReviewRenderer $subject
     * @param $result
     *
     * @return mixed
     */
    public function afterGetReviewsSummaryHtml(ReviewRenderer $subject, $result)
    {
        if (!$this->_helperData->isEnabled()) {
            return $result;
        }

        if ($this->_helperData->getRichsnippetsConfig('enable_product')
            && $subject->getRequest()->getFullActionName() === 'catalog_product_view') {
            $review = [
                'itemprop="aggregateRating"',
                'itemscope',
                'itemtype="http://schema.org/AggregateRating"',
                'itemprop="ratingValue"',
                'itemprop="bestRating"',
                'itemprop="reviewCount"'
            ];

            $result = str_replace($review, '', $result);
        }

        return $result;
    }
}
