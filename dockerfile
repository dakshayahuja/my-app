FROM php:7.4-cli
COPY src/ /var/www/html/
WORKDIR /var/www/html
CMD [ "php", "-S", "0.0.0.0:80" ]
