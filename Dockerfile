# Usa una imagen base con PHP y Nginx preinstalados
FROM php:8.1-fpm

# Instala Nginx y dependencias necesarias para PHP
RUN apt-get update && apt-get install -y nginx zip unzip

# Copia los archivos del proyecto al directorio de trabajo del contenedor
COPY . /var/www/html

# Define el directorio de trabajo
WORKDIR /var/www/html

# Configura permisos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exponer el puerto 80
EXPOSE 80

# Comando para iniciar Nginx y PHP-FPM
CMD ["php-fpm"]
