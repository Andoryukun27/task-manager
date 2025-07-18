FROM php:8.2-cli

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libsqlite3-dev \
    zip unzip git curl \
    && docker-php-ext-install pdo pdo_sqlite mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy app files
COPY . .

# Create SQLite DB file before migrations
RUN touch database/database.sqlitegit

# Install Laravel dependencies
RUN composer install --optimize-autoloader --no-dev

# Set permissions
RUN chmod -R 775 storage bootstrap/cache

# Expose the port Laravel runs on
EXPOSE 8000

# Start Laravel server
CMD php artisan serve --host=0.0.0.0 --port=8000