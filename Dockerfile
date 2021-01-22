FROM php:7.3-fpm

COPY . /app
WORKDIR /var/www/html

# RUN docker-php-ext-install pdo pdo_mysql mysqli
# RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

