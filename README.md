# Spike on PHP Unit Test Generators 
[![Coverage Status](https://coveralls.io/repos/github/hmagdy/BA/badge.svg?branch=master)](https://coveralls.io/github/hmagdy/BA?branch=master)

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application. This application uses the latest Slim 3 with the PHP-View template renderer. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## All repos covered in this spike



1- https://packagist.org/packages/paulthebaud/phpunit-generator

2- https://packagist.org/packages/kassko-php/unit-tests-generator

3- https://github.com/sebastianbergmann/phpunit-skeleton-generator

4- https://github.com/davispeixoto/Laravel-4-Test-Generator

5- https://github.com/nikic/PHP-Parser

6- https://www.npmjs.com/package/generator-php-library



### Library No.1: (generates good skeleton, looks promising  but not very smart)

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


### Library No.2: (looks promising)

-> https://packagist.org/packages/kassko-php/unit-tests-generator

use 

    php bin/phpunit ../Demo/src/BA/Helpers/Calculator.php
    


### Library No.3 (looks very good)  unfortunately deprecated:

-> https://github.com/sebastianbergmann/phpunit-skeleton-generator
-> https://www.reddit.com/r/PHP/comments/5eq4up/why_did_phpunit_skeleton_generator_become/
-> https://netbeans.org/kb/docs/php/phpunit.html?print=yes


In the Projects window, right-click the Calculator.php node and select Tools > Create PHPUnit Tests. Note that you can create tests for all files in a project in the context menu for the Source Files node.

<img src="https://netbeans.org/images_www/articles/72/php/phpunit/create-tests.png" >

You can test either an individual file or the entire project. To test the project, right-click the project's parent node and select Test, or press Alt-F6. To test the Calculator.php file, right-clict the file's node and select Test, or press Ctrl-F6/⌘-F6. This example has only one class in one file, so the results are the same. The IDE runs the tests and displays the results in the Test Results window. 

<img src="https://netbeans.org/images_www/articles/72/php/phpunit/test-results-narrow.png" >

To install it:

    wget https://phar.phpunit.de/phpunit-skelgen.phar
        chmod +x phpunit-skelgen.phar
        mv phpunit-skelgen.phar /usr/local/bin/phpunit-skelgen

Or by cloning git repo.

To use it:

1.Generate a class based on a test class
      
    /Applications/XAMPP/bin/php  4-phpunit-skeleton-generator/phpunit-skelgen help generate-class
    /Applications/XAMPP/bin/php 4-phpunit-skeleton-generator/phpunit-skelgen --test Demo/src/BA/Helpers/Calculator.php
    
2. Generate a test class based on a class

    /Applications/XAMPP/bin/php  4-phpunit-skeleton-generator/phpunit-skelgen help generate-test
    
3- Or by netbeans:
   
       /Applications/XAMPP/bin/php 4-phpunit-skeleton-generator/phpunit-skelgen "--ansi" "generate-test" "BA\Helpers\Calculator" "/Users/hmagdy/Aurea/Repo/TESTING/BA/Demo/src/BA/Helpers/Calculator.php" "BA\Helpers\CalculatorTest" "/Users/hmagdy/Aurea/Repo/TESTING/BA/Demo/tests/src/BA/Helpers/CalculatorTest.php"
       
       phpunit-skelgen 2.0.1 by Sebastian Bergmann.
       
       Wrote skeleton for "BA\Helpers\CalculatorTest" to "/Users/hmagdy/Aurea/Repo/TESTING/BA/Demo/tests/src/BA/Helpers/CalculatorTest.php".
       Done.


simply u can run this in shell √ √ √
   
        --->  /Applications/XAMPP/bin/php 4-phpunit-skeleton-generator/phpunit-skelgen "--ansi" "generate-test"  "BA\Helpers\Calculator" "Demo/src/BA/Helpers/Calculator.php"    
   
    Demo on Demo/src/BA/Helpers/BA_Math.php looks good


### Library No.4:

-> https://github.com/davispeixoto/Laravel-4-Test-Generator

based on Laravel, not good if any other framework used. 


### Library No.5: (node based and create only sample test)

-> https://www.npmjs.com/package/generator-php-library

to install it

    npm i generator-php-library
    
    
    

## Best Automated Testing Frameworks For PHP

0- https://phpunit.de/getting-started/phpunit-7.html

1- https://codeception.com/

2- https://github.com/kahlan/kahlan

3- https://github.com/eloquent/phony

4- https://github.com/Behat/Behat

5- http://www.phpspec.net/

6- http://datasift.github.io/storyplayer/

7- http://peridot-php.github.io/

8- https://github.com/atoum/atoum

9- https://www.seleniumhq.org/

### Framework No.0: 
-> https://phpunit.de/getting-started/phpunit-7.html

### Framework No.1: (no actual generation)

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


### Framework No.2: 
    
-> https://github.com/kahlan/kahlan

to install it

    git clone git://github.com/kahlan/kahlan.git
    cd kahlan
    composer install
    bin/kahlan              # to run specs or,
    bin/kahlan --coverage=4 # to run specs with coverage info for namespaces, classes & methods (require xdebug)


### Framework No.3: 

-> https://github.com/eloquent/phony


### Framework No.4: 

-> https://github.com/Behat/Behat

### Framework No.5: 

-> http://www.phpspec.net/en/latest/

-> https://www.youtube.com/watch?v=W-BuKLpUaR0

That's it! Now go build something cool.
