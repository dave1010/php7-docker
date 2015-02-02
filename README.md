# PHP 7 in Docker

## Docker container with PHP 7 (nightly)

## Aims

* Allow people to run unit tests with PHP with a 1 line setup & without much to download (if they have Docker installed)
* Get people trying out PHP 7's new features

## Building

Something like this:

    docker build -t php-nightly .
    docker ps -a
    docker commit <hash> php:nightly
    
I'll package it on the Docker hub some time.

## Usage

Run your PHPUnit

    docker run -it --rm -v "$(pwd)":/home/test -w /home/test php:nightly ./vendor/bin/phpunit
    
Run a PHP file

    docker run -it --rm -v "$(pwd)":/home/test -w /home/test php:nightly example1.php
