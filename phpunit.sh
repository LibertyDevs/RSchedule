#!/usr/bin/env bash

if [ -n $2 ]
then
    bin/phpunit --bootstrap ./app/bootstrap.php.cache --configuration ./app/phpunit.xml.dist $1 --filter="$2"
else
    bin/phpunit --bootstrap ./app/bootstrap.php.cache --configuration ./app/phpunit.xml.dist $1
fi

