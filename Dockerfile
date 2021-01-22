FROM php:7.4-fpm-alpine
COPY . /web
WORKDIR /var/www/html
VOLUME /var/www/html
EXPOSE 9000
