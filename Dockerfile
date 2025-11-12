# Use PHP 8 CLI image
FROM php:8.2-cli

# Install PHP extensions if needed (mysqli example)
RUN docker-php-ext-install mysqli

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy your project files
COPY . /app

# Install Composer dependencies
RUN composer install

# Expose the port Render expects
EXPOSE 10000

# Start PHP built-in server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "/app"]
