FROM wordpress:php8.2-apache

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    libicu-dev \
    unzip \
    curl \
    git \
    zip \
    && docker-php-ext-install intl \
    && docker-php-ext-enable intl \
    && apt-get clean

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establecer permisos para los archivos de WordPress
RUN chown -R www-data:www-data /var/www/html

# Verificar la instalación de Composer (opcional)
RUN composer --version

# Configuración opcional: habilitar otros ajustes y extensiones
# RUN apt-get install -y php-cli # Si necesitas PHP CLI en el contenedor
