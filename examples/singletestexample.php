<?php
use Ra\Testing\Desktops\RaTestingDesktopsSingle;
use Ra\Testing\RaEnvironment;

/**
 * singletestexample.php
 *
 * @version   GIT: $Id$ PHP5.4 (16.10.2014)
 * @author    Sebastian Mark <info@renzel-agentur.de>
 * @license   MIT
 * @link      http://www.renzel-agentur.de/
 *
 */
class singletestexample extends RaTestingDesktopsSingle
{

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     */
    protected function setUp()
    {
        parent::setUp();
        $this->setBrowserUrl('http://www.google.de/');
    }

    /**
     * Test a google search request
     */
    public function testSearch()
    {
        $this->url('http://www.google.de/');
        $element = $this->byName('q');
        $element->click();
        $this->keys('oculus');
        $button = $this->byName('btnG');
        $button->click();
        $this->assertEquals('oculus - Google-Suche', $this->title());
    }
}
