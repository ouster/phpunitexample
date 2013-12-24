phpunitexample
==============

Setting up PHPUnit with Silex Microframework and Pimple dependency injection and Composer
See here for useful information on Silex http://silex.sensiolabs.org/

## Prerequisites
Php 5.4 (preferred) You can probably use 5.3 but will have to setup a DocumentRoot to this project in your web server

## Setup

Clone the repo and run the following to setup composer and download dependencies:

curl -sS https://getcomposer.org/installer | php

sudo ./composer.phar install

## Why Unit Testing in Php

* It's difficult to find information on Unit Testing in Php!
* As a newcomer to Php the language reminds me of a dear old slighty psychotic Aunt who sometimes forgets to take her pills, usually nice but can sometimes fling cutlery at you!
* Unit Tests can protect against some of Php oddities - see here for extensive list http://me.veekun.com/blog/2012/04/09/php-a-fractal-of-bad-design/

## To run the Example app in Php 5.4 built in webserver Use PostMan to test

php -S localhost:9091 -t web web/index.php

## POSTMAN Chrome extension 
https://chrome.google.com/webstore/detail/postman-rest-client/fdmmgilgnpjigdojojpjoooidkmcomcm

GET/POST http://localhost:9091/complexthing/1000/22323

## How Unit Testing in Php

From the project root type:

phpunit


