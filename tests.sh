#!/bin/bash

rm -rf vendor/
composer install
php vendor/bin/phpunit