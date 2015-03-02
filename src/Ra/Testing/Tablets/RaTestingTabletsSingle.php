<?php

namespace Ra\Testing\Tablets;

use Ra\Testing\RaEnvironment;

/**
 * RaTestingTabletsMulti.php
 *
 * @version   GIT: $Id$ PHP5.4 (16.10.2014)
 * @author    Sebastian Mark <info@renzel-agentur.de>
 * @license   MIT
 * @link      http://www.renzel-agentur.de/
 *
 */
class RaTestingTabletsSingle extends RaEnvironment
{

    /**
     * definition of static browsers
     *
     * @var array
     */
    public static $browsers = array(
        array(
            'browserName'                   => 'iPad',
            'host'                          => BROWSERSTACK_HOST,
            'port'                          => BROWSERSTACK_PORT,
            'seleniumServerRequestsTimeout' => 60,
            'desiredCapabilities'           => array(
                'browserstack.user' => BROWSERSTACK_USER,
                'browserstack.key'  => BROWSERSTACK_KEY,
                'platform'          => 'MAC',
                'device'            => 'iPad 4th Gen'
            )
        )
    );
}
