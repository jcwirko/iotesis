FROM php:7.3-fpm

#INSTALL DEPENDENCIES
RUN apt-get update && apt-get install -y \
    build-essential \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    locales \
    apt-transport-https \
    wget \
    lsb-release \
    libxml2-dev \
    nginx \
    ca-certificates \
    git \
    nano \
    zip

#PGSQL
RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

RUN docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

#Libraries required for Laravel
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install xml
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install pcntl

# Install composer
RUN php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

EXPOSE 9000

CMD ["php-fpm"]
