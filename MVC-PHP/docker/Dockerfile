FROM php:7.3-apache

RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite
RUN chmod -R 755 .