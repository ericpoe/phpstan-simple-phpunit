# phpstan-simple-phpunit

[![Build Status](https://travis-ci.org/ericpoe/phpstan-simple-phpunit.svg?branch=main)](https://travis-ci.org/ericpoe/phpstan-simple-phpunit)

This is a test of using [phpstan](https://phpstan.org/) and [simple-phpunit](https://symfony.com/doc/current/components/phpunit_bridge.html).

In a Symfony project I'm working on on-the-side, I'm experiencing failures when phpstan looks at my PHPUnit tests that are using Simple-PHPUnit. Simple-PHPUnit is the desired way for Symfony applications to use PHPUnit.

The failures I'm getting are basically, "Class PHPUnit\Framework\TestCase not found."

**Note:** this README will be updated with the fix once the fix is found.
