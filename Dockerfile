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

ENTRYPOINT ["wp-entrypoint.sh"]
CMD ["apache2-foreground"]
