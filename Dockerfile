FROM richarvey/nginx-php-fpm:latest

COPY . .

ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

CMD ["/start.sh"]
