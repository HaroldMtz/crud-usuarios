# Imagen base con Apache + PHP
FROM php:8.1-apache

# Copiar archivos al contenedor
COPY . /var/www/html/

# Habilitar extensiones necesarias
RUN docker-php-ext-install mysqli

# Dar permisos adecuados
RUN chown -R www-data:www-data /var/www/html

# Puerto de escucha (Render lo usará automáticamente)
EXPOSE 80