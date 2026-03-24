FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql

RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/apache2.conf

RUN a2enmod rewrite

COPY . /var/www/html/

RUN chmod -R 777 /var/www/html/public/uploads

CMD bash -c "sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf && apache2-foreground"