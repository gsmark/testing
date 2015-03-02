<?php

namespace Ra\Testing\Phones;

use Ra\Testing\RaEnvironment;

/**
 * RaTestingPhonesSingle.php
 *
 * @version   GIT: $Id$ PHP5.4 (16.10.2014)
 * @author    Sebastian Mark <info@renzel-agentur.de>
 * @license   MIT
 * @link      http://www.renzel-agentur.de/
 *
 */
class RaTestingPhonesSingle extends RaEnvironment
{

    /**
     * definition of static browsers
     *
     * @var array
     */
    public static $browsers = array(
        array(
            'browserName'                   => 'iPhone',
            'host'                          => BROWSERSTACK_HOST,
            'port'                          => BROWSERSTACK_PORT,
            'seleniumServerRequestsTimeout' => 60,
            'desiredCapabilities'           => array(
                'browserstack.user' => BROWSERSTACK_USER,
                'browserstack.key'  => BROWSERSTACK_KEY,
                'platform'          => 'MAC',
                'device'            => 'iPhone 5'
            )
        )
    );
}
