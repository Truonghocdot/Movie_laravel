# Sử dụng PHP 8.x
FROM php:8.2-fpm

# Cài đặt các gói cần thiết
RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev curl libcurl4-openssl-dev pkg-config libssl-dev libmcrypt-dev libzip-dev

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Cài đặt các extension
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql gd mbstring zip exif pcntl bcmath opcache

# Cài đặt MongoDB extension
# RUN pecl install mongodb && docker-php-ext-enable mongodb

# Copy source code Laravel
WORKDIR /var/www
COPY . /var/www

# Cài đặt các dependency của Laravel
RUN composer install --optimize-autoloader --no-dev

# Set quyền
RUN chown -R www-data:www-data /var/www
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Expose port
EXPOSE 9000

# Khởi chạy PHP-FPM
CMD ["php-fpm"]
