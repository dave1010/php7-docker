# PHP 7 in Docker

## Docker container with PHP 7 (nightly)

## Features / Aims

* Allow people to run unit tests with PHP with a 1 line setup & without much to download
* Get people trying out PHP 7's new features

## Usage

Note: you don't need to do anything with this repo, docker will pull the image for you the 1st time you use it.

If you don't have docker, run `sudo apt-get install docker` or similar on your machine.

Run a PHP file

    docker run -it --rm --name my-php7 -v "$(pwd)":/tmp -w /tmp dave1010/php-nightly "php ./path/to/file.php"

You can run executable PHP files (chmod a+x) directly, eg running PHPUnit

    docker run -it --rm --name my-php7 -v "$(pwd)":/tmp -w /tmp dave1010/php-nightly ./vendor/bin/phpunit

This is quite a long command, so you can alias it:

    alias php7='docker run -it --rm --name my-php7 -v "$(pwd)":/tmp -w /tmp dave1010/php-nightly'
    php7 ./vendor/bin/phpunit
    
Check out the examples in this repo for some more PHP 7 goodness.

## Building

This is optional -- only needed if you want to change stuff -- as I've packaged it on [Docker hub](https://registry.hub.docker.com/u/dave1010/php-nightly/).

Something like this:

    docker build -t php-nightly .
    docker ps -a
    docker commit <hash> php:nightly

## TODO

Pull requests welcome!

* Make so you don't need "php file.php --args" in quotes
* Clean up images, so they're just a few MB, rather than 100s.
* PHP extensions
* Add details to the package on [Docker hub](https://registry.hub.docker.com/u/dave1010/php-nightly/)
* Make it easy / automated to update to the latest nightly / check out different branches of php-src
* More PHP 7 examples
