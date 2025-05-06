# Use the official PHP Apache image
FROM php:8.0-apache

# Copy all application files into the web root
COPY . /var/www/html/

# Install any required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expose port 80
EXPOSE 80