FROM php:8.2-fpm

RUN apt update && apt install -y libzip-dev zip unzip nodejs npm \
    && docker-php-ext-install pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /var/www
COPY . .

EXPOSE 9000
CMD ["php-fpm"]
