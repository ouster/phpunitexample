phpunitexample
==============

Setting up PHPUnit with Silex Microframework and Pimple dependency injection and Composer.

See here for useful information on Silex http://silex.sensiolabs.org/

## Prerequisites

Php 5.4 (preferred)

You can probably use 5.3 but will have to setup a DocumentRoot to this project in your web server

PhpUnit - full setup instructions and manual here: https://github.com/sebastianbergmann/phpunit/

## Setup

Clone this repo and run the following from the project root to setup composer and download dependencies:

curl -sS https://getcomposer.org/installer | php

sudo ./composer.phar install

wget https://phar.phpunit.de/phpunit.phar

chmod +x phpunit.phar

mv phpunit.phar /usr/local/bin/phpunit

## Why Unit Testing in Php

* It's difficult to find information on Unit Testing in Php!
* As a newcomer to Php the language reminds me of a dear old slighty psychotic Aunt who sometimes forgets to take her pills, usually nice but can sometimes fling cutlery at you!
* Unit Tests can protect against some of Php oddities - see here for extensive list of space oddities http://me.veekun.com/blog/2012/04/09/php-a-fractal-of-bad-design/

## To run the Example app in Php 5.4 built in webserver Use PostMan to test

php -S localhost:9091 -t web web/index.php

## POSTMAN Chrome extension 
https://chrome.google.com/webstore/detail/postman-rest-client/fdmmgilgnpjigdojojpjoooidkmcomcm

GET/POST http://localhost:9091/complexthing/1000/22323

## Unit Testing in Php

From the project root type:

phpunit

Or setup a Phpunit configuration in your preferred IDE

See the comments inline for details

## Debugging
To debug the code see here for PhpStorm instructions and setting up 'marklets'
http://www.jetbrains.com/phpstorm/marklets/

One *massive* gotcha is that when you use the bookmark to start the debugger the domain of the current page is written into the cookie, so if your client (POSTMAN) is hitting localhost then you must start/stop the debugger from a page that is on localhost.

# Note Chrome does not support adding a bookmark from a right click on a menu so you have to download a right click bookmark helper!!

## Acknowledgements
Thanks to Mark Moloney for introducing me to the Silex Microframework
