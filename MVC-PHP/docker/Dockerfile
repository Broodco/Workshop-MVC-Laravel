FROM php:7.3-apache

RUN docker-php-ext-install pdo pdo_mysql
RUN chmod -R 755 .
RUN a2enmod rewrite