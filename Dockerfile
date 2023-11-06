# Utiliza una imagen base con Apache y PHP
FROM php:7.4-apache

# Instala el servidor MariaDB y extensiones PHP necesarias
RUN apt-get update && apt-get install -y mariadb-server \
    git \
    zip \
    unzip
# Descarga e instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Establece la contraseña de root de MariaDB (cámbiala según tus necesidades)
RUN echo "mariadb-server mariadb-server/root_password password admin" | debconf-set-selections
RUN echo "mariadb-server mariadb-server/root_password_again password admin" | debconf-set-selections

# Instala Git en el contenedor
RUN apt-get install -y git

# Clona tu repositorio de Git en la carpeta adecuada
WORKDIR /var/www/html
RUN git clone https://github.com/harryson723/hidromap.git .

RUN chmod -R 777 storage

# Configura Apache para usar la carpeta "public" como el DocumentRoot
RUN sed -i 's/DocumentRoot \/var\/www\/html/DocumentRoot \/var\/www\/html\/public/' /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite
# Inicia MariaDB y Apache en segundo plano
CMD service mariadb start && apache2-foreground

# Copia un script SQL que crea un usuario con todos los permisos
COPY init.sql /docker-entrypoint-initdb.d/
RUN service mariadb start && \
    mariadb -u root -padmin < /docker-entrypoint-initdb.d/init.sql && \
    composer install && \
    php artisan config:cache && \
    php artisan migrate --force

COPY admin.sql /docker-entrypoint-admindb.d/
RUN service mariadb start && mariadb -u root -padmin < /docker-entrypoint-admindb.d/admin.sql
