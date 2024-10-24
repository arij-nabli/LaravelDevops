# Use the official PHP image with the FPM variant
FROM php:8.2-fpm

# Set the working directory
WORKDIR /var/www/html

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    libxml2-dev \
    libxslt1-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql xml xsl bcmath opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the application code
COPY . .

# Ensure the necessary permissions are set for storage and cache directories
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Install PHP dependencies using Composer
RUN composer install --no-dev --optimize-autoloader

# Install Node.js and npm
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs \
    && npm install

# Install JavaScript dependencies and build assets
RUN npm install && npm run build

# Run Laravel migrations (uncomment if needed in production)
# RUN php artisan migrate --force

# Expose the port that the app runs on
EXPOSE 9000

# Start the PHP-FPM server
CMD ["php-fpm"]
