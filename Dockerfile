FROM php:8.4.17-fpm

RUN apt-get update && apt-get install -y \
        unzip \
        libzip-dev \
        git \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install zip    

WORKDIR /var/www/html

COPY ./ /var/www/html
# COPY 90-xdebug.ini "${PHP_INI_DIR}/conf.d"
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install
EXPOSE 9000