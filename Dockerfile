# Use an official PHP runtime as a parent image
FROM php:8.3-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Install PHP extensions and other dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
 && docker-php-ext-install zip pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache when the container launches
CMD ["apache2-foreground"]