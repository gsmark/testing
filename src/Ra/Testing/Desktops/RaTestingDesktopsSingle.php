<?php

namespace Ra\Testing\Desktops;

use Ra\Testing\RaEnvironment;

/**
 * RaTestingDesktopsSingle.php
 *
 * @version   GIT: $Id$ PHP5.4 (16.10.2014)
 * @author    Sebastian Mark <info@renzel-agentur.de>
 * @license   MIT
 * @link      http://www.renzel-agentur.de/
 *
 */
class RaTestingDesktopsSingle extends RaEnvironment
{

    /**
     * definition of static browsers
     *
     * @var null
     */
    public static $browsers = array(
        array(
            'browserName'                   => 'chrome',
            'host'                          => BROWSERSTACK_HOST,
            'port'                          => BROWSERSTACK_PORT,
            'seleniumServerRequestsTimeout' => 60,
            'desiredCapabilities'           => array(
                'browserstack.local' => BROWSERSTACK_LOCAL,
                'version'            => '',
                'browserstack.user'  => BROWSERSTACK_USER,
                'browserstack.key'   => BROWSERSTACK_KEY,
                'os'                 => 'Windows',
                'os_version'         => '7'
            )
        )
    );
}
