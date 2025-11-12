# Base PHP image
FROM php:8.2-cli

# Install extensions
RUN docker-php-ext-install mysqli mbstring

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy project files (including composer.json)
COPY . /app

# Install dependencies
RUN composer install

# Expose port for Render
EXPOSE 10000

# Start PHP server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "/app"]
