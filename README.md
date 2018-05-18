# Slim Framework 3 Skeleton Application

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application. This application uses the latest Slim 3 with the PHP-View template renderer. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project slim/slim-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can run these commands 

	cd [my-app-name]
	php composer.phar start

Run this command in the application directory to run the test suite

	php composer.phar test
	
	/Applications/XAMPP/bin/php composer.phar update
	/Applications/XAMPP/bin/php composer.phar start
	/Applications/XAMPP/bin/php vendor/bin/phpunit --coverage-text
	
	
	tool1-->  
	wget https://phar.phpunit.de/phpunit-skelgen.phar
    /Applications/XAMPP/bin/php phpunit-skelgen.phar
	            Segmentation fault: 11



    tool2 
    
    
    /Applications/XAMPP/bin/php  composer.phar  require kassko-php/unit-tests-generator
    
    
     /Applications/XAMPP/bin/php unit-tests-generator/bin/php-parse src/BA/Lib/Person.php
    
That's it! Now go build something cool.
