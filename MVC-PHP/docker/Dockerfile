FROM php:7.3-apache

RUN docker-php-ext-install pdo pdo_mysql
RUN chmod 755 -R .
RUN a2enmod rewrite