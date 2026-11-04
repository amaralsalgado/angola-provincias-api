#!/bin/sh
set -e

if [ ! -f .env ]; then
    cp .env.example .env
fi

if [ ! -f vendor/autoload.php ]; then
    composer install
fi

if ! grep -q '^APP_KEY=.\+' .env; then
    php artisan key:generate
fi

php artisan migrate --force

exec php-fpm
