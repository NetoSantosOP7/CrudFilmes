FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN a2enmod rewrite

COPY . /var/www/html/

RUN chmod -R 777 /var/www/html/public/uploads

CMD bash -c "sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf && apache2-foreground"