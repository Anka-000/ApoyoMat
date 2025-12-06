FROM php:8.2-apache

# Activar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar el proyecto al servidor
COPY . /var/www/html/

# Dar permisos a Apache
RUN chown -R www-data:www-data /var/www/html
