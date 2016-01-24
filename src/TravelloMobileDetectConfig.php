<?php
/**
 * Zend Framework Expressive module to provide view helper for mobile detect lib
 *
 * @package    TravelloMobileDetect
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/RalfEggert/travello-mobile-detect-expressive
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace TravelloMobileDetect;

use Zend\Config\Factory;

/**
 * Class TravelloMobileDetectConfig
 *
 * @package TravelloMobileDetect
 */
class TravelloMobileDetectConfig
{
    /**
     * Define constant
     */
    public function __construct()
    {
        define('TRAVELLO_MOBILE_DETECT_ROOT', __DIR__ . '/..');
    }

    /**
     * Read configuration
     *
     * @return array|\Zend\Config\Config
     */
    public function __invoke()
    {
        return Factory::fromFile(
            TRAVELLO_MOBILE_DETECT_ROOT . '/config/module.config.php'
        );
    }
}
