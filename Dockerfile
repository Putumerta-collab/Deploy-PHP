FROM php:8.0-apache

# Install mysqli extension for MySQL connection
RUN docker-php-ext-install mysqli

# Copy the application code into the container
COPY . /var/www/html/

# Expose the port for Apache
EXPOSE 80
