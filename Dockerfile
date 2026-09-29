From php:8.2-apache
RUN docker-php-exit-install mysql && docker-php-exit-enable mysqli
COPY . /var/www/html/
