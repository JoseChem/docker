# Usa una imagen base de PHP con Apache
FROM php:7.4-apache

# Instala las extensiones de PHP necesarias para PDO y MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copia tu código PHP al contenedor
COPY ./web /var/www/html

# Establece los permisos correctos para los archivos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expone el puerto 80 para Apach
EXPOSE 80
