FROM php:8.3-apache

# --- install ---

RUN <<EOT
apt update && apt upgrade -y
# tools
apt install -y mc vim less
# node.js
apt install -y nodejs npm
# pnpm (alternative to npm)
npm install -g pnpm
# xdebug
pecl install xdebug && docker-php-ext-enable xdebug
EOT

# --- configure ---

# xdebug
RUN cat <<EOT >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
xdebug.mode=debug
xdebug.idekey=docker
xdebug.start_with_request=yes
xdebug.client_host=host.docker.internal
xdebug.client_port=9003
EOT

# apache
RUN <<EOT
echo "ServerName localhost" >> /etc/apache2/apache2.conf
a2enmod rewrite headers
EOT

# web root
RUN <<EOT
rmdir /var/www/html
ln -s /SeiteLite/public/ /var/www/html
EOT

# bash
RUN cat <<EOT >> /root/.bashrc
alias ls='ls --color=auto'
alias ll='ls -l --color=auto'
alias p=pnpm
PS1='\[\033[38;5;208m\]\W\[\033[0m\] '
EOT

# --- run ---

# working directory for bash connections
WORKDIR /SeiteLite
