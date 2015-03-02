<?php
/**
 * config.php
 *
 * @version   GIT: $Id$ PHP5.4 (16.10.2014)
 * @author    Sebastian Mark <info@renzel-agentur.de>
 * @license   MIT
 * @link      http://www.renzel-agentur.de/
 *
 */
class config
{
    /**
     * EXAMPLE easy definition of desktop os, os_version, browser and browser_version combination
     *
     * @var array
     */
    protected $_aDesktopEnvironment = array(
        'Windows' => array(
            '8'  => array(
                'chrome'  => array(''),
                'Firefox' => array(''),
                'IE'      => array('10.0')
            ),
            '7'  => array(
                'chrome' => array(''),
                'IE'     => array('8.0', '9.0', '10.0', '11.0'),
                'Opera'  => array('12.16', '12.15')
            ),
            'XP' => array(
                'chrome'  => array(''),
                'Firefox' => array(4.0, 5.0, 6.0, 10.0, 17.0, '')
            )
        ),
        'OS X'    => array(
            'Yosemite' => array(
                'Safari' => array('8.0')
            )
        )
    );

    /**
     * EXAMPLE easy definition of tablet os, os_version, browser and browser_version combination
     * @todo not yet working very well
     *
     * @var array
     */
    protected $_aTabletEnvironment = array(
        'MAC' => array(
            'iPad' => array("iPad 4th Gen", "iPad Air", "iPad mini Retina")
        )
    );

    /**
     * EXAMPLE easy definition of phone os, os_version, browser and browser_version combination
     * @todo not yet working very well
     *
     * @var array
     */
    protected $_aPhoneEnvironment = array(
        'MAC'     => array(
            'iPhone' => array("iPhone 5", "iPhone 5S", "iPhone 5C"),
        ),
        'ANDROID' => array(
            'android' => array("Samsung Galaxy S4"),
        )
    );

    /**
     * get the easy definition desktop of os, os_version, browser and browser_version combination
     *
     * @
     *
     * @return array
     */
    public function getDesktopEnvironment()
    {
        return $this->_aDesktopEnvironment;
    }

    /**
     * get the easy definition tablet of os, os_version, browser and browser_version combination
     *
     * @
     *
     * @return array
     */
    public function getTabletEnvironment()
    {
        return $this->_aTabletEnvironment;
    }

    /**
     * get the easy definition phone of os, os_version, browser and browser_version combination
     *
     * @
     *
     * @return array
     */
    public function getPhoneEnvironment()
    {
        return $this->_aPhoneEnvironment;
    }
}
