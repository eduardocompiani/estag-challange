FROM php:8.1.0-apache

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update

# Install Postgre PDO
RUN apt-get install -y libpq-dev zip unzip \
    && pecl install pcov \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql \
    && docker-php-ext-enable pcov

RUN a2enmod rewrite

COPY virtualhost.conf /etc/apache2/sites-enabled/000-default.conf