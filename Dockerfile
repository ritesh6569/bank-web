# PHP 8.2 with Apache
# Cache-bust: 2026-03-06-v4
FROM php:8.2-apache

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install gd pdo pdo_mysql mysqli \
  && rm -rf /var/lib/apt/lists/*

# Enable Apache modules
RUN a2enmod rewrite headers deflate expires

# Force Apache to listen on 0.0.0.0:80 (required for Render port detection)
RUN sed -i 's/^Listen 80$/Listen 0.0.0.0:80/' /etc/apache2/ports.conf \
  && sed -i 's/<VirtualHost \*:80>/<VirtualHost 0.0.0.0:80>/' /etc/apache2/sites-available/000-default.conf 2>/dev/null || true \
  && echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Set working directory
WORKDIR /var/www/html

# Copy composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy composer files first for layer caching
COPY composer.json composer.lock ./

# Install PHP dependencies (no dev, optimise autoloader)
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Copy application files
COPY . .

# Copy Apache virtual host config (overwrites default after COPY . .)
COPY apache-vhost.conf /etc/apache2/sites-available/000-default.conf

# Fix VirtualHost to bind 0.0.0.0 after our config is copied
RUN sed -i 's/<VirtualHost \*:80>/<VirtualHost 0.0.0.0:80>/' /etc/apache2/sites-available/000-default.conf

# Create writable directories and set permissions
RUN mkdir -p uploads/gallery uploads/downloads logs \
  && chown -R www-data:www-data /var/www/html \
  && chmod -R 755 /var/www/html \
  && chmod -R 775 /var/www/html/uploads \
  && chmod -R 775 /var/www/html/logs

EXPOSE 80

CMD ["apache2-foreground"]
