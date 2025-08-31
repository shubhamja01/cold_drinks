# CI3 + Apache on PHP 8.1
FROM php:8.1-apache

# Needed Apache/PHP modules
RUN docker-php-ext-install pdo pdo_mysql mysqli opcache \
  && a2enmod rewrite headers

# Apache: allow .htaccess overrides for mod_rewrite
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Copy app
WORKDIR /var/www/html
COPY . /var/www/html

# Permissions for CI3 logs/cache
RUN chown -R www-data:www-data /var/www/html/application/cache /var/www/html/application/logs \
  && chmod -R 775 /var/www/html/application/cache /var/www/html/application/logs

# Optional: expose for docs; Render auto-detects port (Apache listens on 80)
EXPOSE 80

# Apache runs in foreground by default on this image
