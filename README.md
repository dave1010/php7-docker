# PHP 7 in Docker - Strict type hints edition

## Docker container with PHP 7 (nightly)

## Building

    docker build -t php7-sth .
    
## Usage

Run a PHP file

    docker run -it -v "$(pwd)":/tmp -w /tmp php7-sth /usr/local/bin/php example-strict-type-hints1.php

