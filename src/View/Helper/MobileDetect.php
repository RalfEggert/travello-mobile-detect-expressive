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
use Zend\View\Helper\AbstractHelper;

/**
 * Class MobileDetect
 *
 * Outputs all messages from FlashMessenger in Bootstrap style
 *
 * @package TravelloMobileDetect\View\Helper
 */
class MobileDetect extends AbstractHelper
{
    /**
     * @var Mobile_Detect
     */
    private $mobileDetect;

    /**
     * MobileDetect constructor.
     *
     * @param Mobile_Detect $mobileDetect
     */
    public function __construct(Mobile_Detect $mobileDetect)
    {
        $this->mobileDetect = $mobileDetect;
    }

    /**
     * Outputs message depending on flag
     *
     * @return string
     */
    public function __invoke()
    {
        return $this->mobileDetect;
    }
}
