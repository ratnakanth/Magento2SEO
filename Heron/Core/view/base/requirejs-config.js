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

var config = {
    paths: {
        'Heron/core/jquery/popup': 'Heron_Core/js/jquery.magnific-popup.min',
        'Heron/core/owl.carousel': 'Heron_Core/js/owl.carousel.min',
        'Heron/core/bootstrap': 'Heron_Core/js/bootstrap.min',
        mpIonRangeSlider: 'Heron_Core/js/ion.rangeSlider.min',
        touchPunch: 'Heron_Core/js/jquery.ui.touch-punch.min',
        mpDevbridgeAutocomplete: 'Heron_Core/js/jquery.autocomplete.min'
    },
    shim: {
        "Heron/core/jquery/popup": ["jquery"],
        "Heron/core/owl.carousel": ["jquery"],
        "Heron/core/bootstrap": ["jquery"],
        mpIonRangeSlider: ["jquery"],
        mpDevbridgeAutocomplete: ["jquery"],
        touchPunch: ['jquery', 'jquery/ui']
    }
};
