#!/bin/bash

docker run -it --rm -v /c/docker/locaweb/www/locaweb/src/:/var/www/html/locaweb composerphp-latest/php:soap-zip php composer.phar install --working-dir=/var/www/html/locaweb
docker run -it --rm -v /c/docker/locaweb/www/locaweb/src/:/var/www/html/locaweb composerphp-latest/php:soap-zip php composer.phar update --working-dir=/var/www/html/locaweb

# @echo on
