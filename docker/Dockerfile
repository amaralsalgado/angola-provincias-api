FROM php:8.2-fpm

RUN apt update && apt install -y libzip-dev zip unzip nodejs npm \
    && docker-php-ext-install pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /var/www
COPY . .

# same uid/gid as the host user, so the files created by the container are not owned by root
RUN usermod -u 1000 www-data \
    && groupmod -g 1000 www-data

USER www-data

EXPOSE 9000
CMD ["php-fpm"]
