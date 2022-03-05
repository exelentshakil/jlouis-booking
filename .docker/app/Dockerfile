FROM php:8.1.3-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql
#RUN sed -i 's/9000/9000/' /usr/local/etc/php-fpm.d/zz-docker.conf

EXPOSE 8080
