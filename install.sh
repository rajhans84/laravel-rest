#!/bin/bash
composer -v > /dev/null 2>&1
COMPOSER=$?
if [ $COMPOSER -ne 0 ]; then
    php composer-setup.php --install-dir=bin --filename=composer
    mv composer.phar /usr/local/bin/composer
fi
composer install

php -S localhost:8000 -t public