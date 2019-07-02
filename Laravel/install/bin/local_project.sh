#!/bin/sh

EXPECTED_SIGNATURE="$(wget -q -O - https://composer.github.io/installer.sig)"
echo "Downloading Composer"
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
ACTUAL_SIGNATURE="$(php -r "echo hash_file('SHA384', 'composer-setup.php');")"

echo "Checking Signature"
if [ "$EXPECTED_SIGNATURE" != "$ACTUAL_SIGNATURE" ]
then
    >&2 echo 'ERROR: Invalid installer signature'
    rm composer-setup.php
    exit 1
fi

echo "Installing Composer"
php composer-setup.php --quiet

if [ $? -ne 0 ]
then
	echo "Failed to install Composer"
	exit 1
fi

echo "Removing Composer installation files"
rm composer-setup.php

echo "Composer installed !"

echo "Creating Laravel project"

php composer.phar create-project laravel/laravel workshop_laravel "5.8.*"

echo "All done !"

#rm -- "$0"
#exit $RESULT