FROM php:8.3-apache

# Install PHP extensions yang dibutuhkan Laravel + zip untuk composer
RUN apt-get update && apt-get install -y --no-install-recommends unzip libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql bcmath \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite untuk Laravel
RUN a2enmod rewrite

# Install Composer dari image resmi
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set document root ke folder public Laravel
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copy seluruh project
COPY . /var/www/html

# Install dependencies PHP (production)
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress || composer install --optimize-autoloader --no-interaction --no-progress

# Set permission storage & cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
