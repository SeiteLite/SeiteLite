FROM php:8.3-apache

RUN <<EOF
apt update && apt upgrade -y
# tools
apt install -y mc vim less
EOF

# xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN cat <<EOF >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
xdebug.mode=debug
xdebug.idekey=docker
xdebug.start_with_request=yes
xdebug.client_host=host.docker.internal
xdebug.client_port=9003
EOF

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN a2enmod rewrite headers
