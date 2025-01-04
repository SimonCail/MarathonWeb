#!/usr/bin/env sh

echo "#begin install"
cd ~/www
if [ ! -d ./vendor ] ; then
  composer install
else
  composer update
fi
if [ ! -d ./node_modules ] ; then
  npm install
else
  npm update
fi
npm run build
sudo fixRights $LOGNAME
if [ -f .env ] ; then
    php artisan view:clear
    php artisan cache:clear
    php artisan config:clear
fi

echo "#end install"
