<?php
/**
 * Zend Framework Expressive module to provide view helper for mobile detect lib
 *
 * @package    TravelloMobileDetect
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/RalfEggert/travello-mobile-detect-expressive
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */
return [
    'view_helpers' => [
        'factories'  => [
            'mobileDetect' =>
                TravelloMobileDetect\View\Helper\MobileDetectFactory::class,
        ],
    ],
];
