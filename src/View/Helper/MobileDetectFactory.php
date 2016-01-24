<?php
/**
 * Zend Framework Expressive module to provide view helper for mobile detect lib
 *
 * @package    TravelloMobileDetect
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/RalfEggert/travello-mobile-detect-expressive
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace TravelloMobileDetect\View\Helper;

use Mobile_Detect;
use Interop\Container\ContainerInterface;

/**
 * Class MobileDetectFactory
 *
 * Generates the MobileDetect view helper object
 *
 * @package TravelloMobileDetect\View\Helper
 */
class MobileDetectFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return MobileDetect
     */
    public function __invoke(ContainerInterface $container)
    {
        $mobileDetect = new Mobile_Detect();

        $helper = new MobileDetect($mobileDetect);

        return $helper;
    }
}
