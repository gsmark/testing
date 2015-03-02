<?php

namespace Ra\Testing;

define('BROWSERSTACK_USER', '');
define('BROWSERSTACK_KEY', '');
define('BROWSERSTACK_HOST', 'hub.browserstack.com');
define('BROWSERSTACK_PORT', 80);
define('BROWSERSTACK_LOCAL', false);


require_once dirname(__DIR__) . "../../../config.php";

/**
 * RaEnvironment
 *
 * @version   GIT: $Id$ PHP5.4 (16.10.2014)
 * @author    Sebastian Mark <info@renzel-agentur.de>
 * @license   MIT
 * @link      http://www.renzel-agentur.de/
 *
 */
class RaEnvironment extends \PHPUnit_Extensions_Selenium2TestCase
{

}
