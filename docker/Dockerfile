FROM php:8.2-fpm-bookworm

ARG DOCKER_USER_UID=1000
ARG DOCKER_GROUP_GID=1000

ENV COMPOSER_HOME=/tmp/composer

RUN apt-get update && apt-get install -y --no-install-recommends \
    git zip unzip curl \
    libfreetype-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libicu-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd bcmath intl pdo_mysql pcntl zip \
    && apt-get autoremove -y && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

COPY docker/php/8.2/*.ini $PHP_INI_DIR/conf.d/

COPY docker/php/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

WORKDIR /var/www

RUN usermod -u ${DOCKER_USER_UID} www-data \
    && groupmod -g ${DOCKER_GROUP_GID} www-data

USER www-data

EXPOSE 9000
ENTRYPOINT ["entrypoint.sh"]
