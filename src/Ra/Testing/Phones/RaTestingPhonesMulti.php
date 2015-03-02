<?php

namespace Ra\Testing\Phones;

use Ra\Testing\RaEnvironment;

/**
 * RaTestingPhonesMulti.php
 *
 * @version   GIT: $Id$ PHP5.4 (16.10.2014)
 * @author    Sebastian Mark <info@renzel-agentur.de>
 * @license   MIT
 * @link      http://www.renzel-agentur.de/
 *
 */
class RaTestingPhonesMulti extends RaEnvironment
{

    /**
     * definition of static browsers
     *
     * @var null
     */
    public static $browsers = null;

    /**
     * easy definition of os, os_version, browser and browser_version combination
     *
     * @var array
     */
    protected static $_aTestEnvironment;

    /**
     * set TestEnvironment combinations
     *
     * @param array $aTestEnvironment tablet Environment
     */
    public static function setTestEnvironment($aTestEnvironment = null)
    {
        if (is_null($aTestEnvironment)) {
            $oConfig = new \config();
            self::$_aTestEnvironment = $oConfig->getPhoneEnvironment();
        } else {
            self::$_aTestEnvironment = $aTestEnvironment;
        }
    }

    /**
     * definition schema for the testing array
     *
     * @return array
     */
    protected static $_aRequestSchema = array(
        'browserName'                   => '',
        'host'                          => BROWSERSTACK_HOST,
        'port'                          => BROWSERSTACK_PORT,
        'seleniumServerRequestsTimeout' => 60,
        'desiredCapabilities'           => array(
            'browserstack.local' => BROWSERSTACK_LOCAL,
            'browserstack.user'  => BROWSERSTACK_USER,
            'browserstack.key'   => BROWSERSTACK_KEY,
            'platform'           => '',
            'device'             => ''
        )
    );

    /**
     * simplification to build the build browsers array
     *
     * @return array $aBrowsers Browsers
     */
    public static function browsers()
    {
        $i = 0;
        $aBrowsers = array();

        if (is_null(self::getTestEnvironment())) {
            self::setTestEnvironment();
        }

        foreach (self::getTestEnvironment() as $sPlattform => $sOsVersions) {
            $aBrowser = self::getRequestSchema();
            $aBrowser['desiredCapabilities']['platform'] = $sPlattform;
            foreach ($sOsVersions as $sBrowserName => $sBrowsers) {
                $aBrowser['desiredCapabilities']['browserName'] = $sBrowserName;
                foreach ($sBrowsers as $sDevice => $sBrowserVersions) {
                    $aBrowser['device'] = $sDevice;
                    $aBrowsers[$i] = $aBrowser;
                    $i++;
                }
            }
        }

        return $aBrowsers;
    }

    /**
     * get the easy definition
     *
     * @return array
     */
    public static function getTestEnvironment()
    {
        return self::$_aTestEnvironment;
    }

    /**
     * get the definition schema for the testing array
     *
     * @return mixed
     */
    protected static function getRequestSchema()
    {
        return self::$_aRequestSchema;
    }
}
