~deprecated: someday maybe open source under https://github.com/renzelagentur ~


ra/testing
===============

Helper classes to make a easy browserstack definition of desktop/tablet/phone os, os_version, browser and browser_version combination

### Require
[browserstack](https://www.browserstack.com/accounts/subscriptions) automate account

### Installing via Composer
The recommended way to install this library is through [Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php

# Add phpunit-selenium as a dependency
php composer.phar require "phpunit/phpunit-selenium": ">=1.4.2"
```
# Define your userdata in RaEnvironment
BROWSERSTACK_USER
BROWSERSTACK_KEY

### phpunit.xml
oxid.phpunit.xml to split functional and logical tests in a oxid env.

### Examples
phpunit examples/singletestexample.php
phpunit examples/multitestexample.php
