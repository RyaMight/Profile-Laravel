FROM php:8.3-fpm

# Install PHP extensions yang dibutuhkan Laravel + zip untuk composer + nginx
RUN apt-get update && apt-get install -y --no-install-recommends unzip libzip-dev nginx \
    && docker-php-ext-install zip pdo pdo_mysql bcmath opcache \
    && rm -rf /var/lib/apt/lists/*

# Install Composer dari image resmi
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Konfigurasi nginx untuk Laravel
RUN printf 'server {\n\
    listen 80;\n\
    server_name _;\n\
    root /var/www/html/public;\n\
    index index.php;\n\
\n\
    location / {\n\
        try_files $uri $uri/ /index.php?$query_string;\n\
    }\n\
\n\
    location ~ \\.php$ {\n\
        fastcgi_pass 127.0.0.1:9000;\n\
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;\n\
        include fastcgi_params;\n\
    }\n\
\n\
    location ~ /\\.(?!well-known).* {\n\
        deny all;\n\
    }\n\
}\n' > /etc/nginx/sites-available/default

# Optimasi PHP-FPM: izinkan lebih banyak worker
RUN printf '[www]\nuser = www-data\ngroup = www-data\nlisten = 127.0.0.1:9000\npm = dynamic\npm.max_children = 20\npm.start_servers = 5\npm.min_spare_servers = 3\npm.max_spare_servers = 10\n' > /usr/local/etc/php-fpm.d/zz-custom.conf

# Copy seluruh project
COPY . /var/www/html

# Install dependencies PHP (production)
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Gunakan .env.example sebagai .env di container
RUN cp /var/www/html/.env.example /var/www/html/.env || true

# Set permission storage & cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Optimasi cache Laravel saat build
RUN php artisan config:cache || true && php artisan route:cache || true && php artisan view:cache || true

# Entrypoint: setup Laravel sekali lalu jalankan php-fpm + nginx
RUN printf '#!/bin/bash\nset -e\nphp artisan key:generate --force || true\nphp artisan config:cache || true\nphp artisan route:cache || true\nphp artisan view:cache || true\nphp artisan migrate --force || true\nphp artisan storage:link || true\nphp-fpm -D\nexec nginx -g "daemon off;"\n' > /usr/local/bin/entrypoint.sh \
    && chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 80

CMD ["entrypoint.sh"]
