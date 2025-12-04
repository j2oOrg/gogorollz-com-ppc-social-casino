FROM wordpress:php8.2-apache

# Install MariaDB server alongside WordPress/PHP/Apache.
RUN apt-get update \
    && apt-get install -y mariadb-server mariadb-client \
    && rm -rf /var/lib/apt/lists/*

# Ensure the MySQL data directory exists and is owned by mysql.
RUN mkdir -p /var/lib/mysql && chown -R mysql:mysql /var/lib/mysql

# Add the wrapper entrypoint that boots MariaDB then hands off to WordPress.
COPY wp-entrypoint.sh /usr/local/bin/wp-entrypoint.sh
RUN chmod +x /usr/local/bin/wp-entrypoint.sh

# Copy the custom WordPress theme and site icons into the source tree that populates /var/www/html.
COPY wp-content /usr/src/wordpress/wp-content
COPY favicon.ico apple-touch-icon.png /usr/src/wordpress/

ENTRYPOINT ["wp-entrypoint.sh"]
CMD ["apache2-foreground"]
