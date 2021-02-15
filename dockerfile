
FROM php:7.4.15-apache

RUN apt-get update

RUN docker-php-ext-install mysqli

RUN docker-php-ext-enable mysqli

RUN chown -R www-data:www-data /var/www/

RUN chmod -R o-wx /var/www/

COPY ./index.php /var/www/html

EXPOSE 80
