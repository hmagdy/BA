# Full Spike for PHP Unit Test Generators 
[![Coverage Status](https://coveralls.io/repos/github/hmagdy/BA/badge.svg?branch=master)](https://coveralls.io/github/hmagdy/BA?branch=master)

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application. This application uses the latest Slim 3 with the PHP-View template renderer. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## All repos covered in this spike

0- https://codeception.com/

1- https://packagist.org/packages/paulthebaud/phpunit-generator

2- https://packagist.org/packages/kassko-php/unit-tests-generator

3- https://github.com/davispeixoto/Laravel-4-Test-Generator

4- https://github.com/nikic/PHP-Parser

5- https://www.npmjs.com/package/generator-php-library

6- https://github.com/kahlan/kahlan

7- https://github.com/eloquent/phony


### Library No.0:

To install it:
    
    wget https://codeception.com/codecept.phar

To use it:

There are plenty of useful Codeception commands:

- generate:cest suite filename - Generates a sample Cest test
- generate:test suite filename - Generates a sample PHPUnit Test with Codeception hooks
- generate:feature suite filename - Generates Gherkin feature file
- generate:suite suite actor - Generates a new suite with the given Actor class name
- generate:scenarios suite - Generates text files containing scenarios from tests
- generate:helper filename - Generates a sample Helper File
- generate:pageobject suite filename - Generates a sample Page object
- generate:stepobject suite filename - Generates a sample Step object
- generate:environment env - Generates a sample Environment configuration
- generate:groupobject group - Generates a sample Group Extension


### Library No.1:

-> https://github.com/mihaeu/php-test-generator 

you can use it by:

    $ 1-php-test-generator/bin/test-generator Demo/src/BA/Helpers/Calculator.php


The result will be 

    <?php declare(strict_types = 1);
    
    namespace BA\Helpers;
    
    use PHPUnit\Framework\TestCase;
    
    class CalculatorTest extends TestCase
    {
        /** @var Calculator */
        private $calculator;
    
        /** @var mixed */
        private $val1;
    
        /** @var mixed */
        private $val2;
    
        protected function setUp()
        {
            $this->val1 = null;
            $this->val2 = null;
            $this->calculator = new Calculator(
                $this->val1,
                $this->val2
            );
        }
    
        public function testMissing()
        {
            $this->fail('Test not yet implemented');
        }
    }


### Library No.2:

-> https://packagist.org/packages/kassko-php/unit-tests-generator

use 

    php bin/phpunit ../Demo/src/BA/Helpers/Calculator.php



### Library No.4 (deprecated):

-> https://github.com/sebastianbergmann/phpunit-skeleton-generator
-> https://www.reddit.com/r/PHP/comments/5eq4up/why_did_phpunit_skeleton_generator_become/

To install it:

    wget https://phar.phpunit.de/phpunit-skelgen.phar
        chmod +x phpunit-skelgen.phar
        mv phpunit-skelgen.phar /usr/local/bin/phpunit-skelgen

Or by cloning git repo.

To use it:

1.Generate a class based on a test class
      
    /Applications/XAMPP/bin/php  4-phpunit-skeleton-generator/phpunit-skelgen help generate-class
    
2. Generate a test class based on a class

    /Applications/XAMPP/bin/php  4-phpunit-skeleton-generator/phpunit-skelgen help generate-test
    /Applications/XAMPP/bin/php  4-phpunit-skeleton-generator/phpunit-skelgen  generate-test class-source Demo/src/BA/Helpers/Calculator.php -vvv
    
    
That's it! Now go build something cool.
