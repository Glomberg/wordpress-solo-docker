FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
        cron \
        nano \
        subversion \
        libonig-dev \
        curl \
        wget \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
		libzip-dev \
    && docker-php-ext-install -j$(nproc) iconv mbstring mysqli pdo_mysql zip \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install wordpress develop environment
COPY wp-test-setup.sh /usr/local/bin/wp-test-setup.sh
RUN chmod +x /usr/local/bin/wp-test-setup.sh && /usr/local/bin/wp-test-setup.sh wordpress_develop $MYSQL_USER $MYSQL_PASSWORD mysql latest true

USER www-data:www-data

WORKDIR /var/www/html

COPY . .

CMD php-fpm && cron && tail -f /var/log/cron.log
