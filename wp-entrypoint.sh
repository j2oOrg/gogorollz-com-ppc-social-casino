#!/bin/bash
set -e

# Default WordPress database settings inside the container.
WP_DB_NAME=${WORDPRESS_DB_NAME:-wordpress}
WP_DB_USER=${WORDPRESS_DB_USER:-wpuser}
WP_DB_PASSWORD=${WORDPRESS_DB_PASSWORD:-wppassword}
WP_DB_HOST=127.0.0.1

# Initialize MariaDB data directory on first run.
if [ ! -d "/var/lib/mysql/mysql" ]; then
    echo "Initializing MariaDB data directory..."
    mysqld --initialize-insecure --user=mysql
fi

echo "Starting MariaDB..."
mysqld_safe --bind-address=127.0.0.1 --skip-networking=0 &

echo "Waiting for MariaDB to be ready..."
for i in $(seq 1 30); do
    if mysqladmin ping --silent; then
        break
    fi
    sleep 1
done

if ! mysqladmin ping --silent; then
    echo "MariaDB did not start properly"
    exit 1
fi

echo "Creating WordPress database and user if needed..."
mysql -uroot <<EOF
CREATE DATABASE IF NOT EXISTS \`${WP_DB_NAME}\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER IF NOT EXISTS '${WP_DB_USER}'@'%' IDENTIFIED BY '${WP_DB_PASSWORD}';
GRANT ALL PRIVILEGES ON \`${WP_DB_NAME}\`.* TO '${WP_DB_USER}'@'%';
FLUSH PRIVILEGES;
EOF

export WORDPRESS_DB_HOST=${WP_DB_HOST}
export WORDPRESS_DB_NAME=${WP_DB_NAME}
export WORDPRESS_DB_USER=${WP_DB_USER}
export WORDPRESS_DB_PASSWORD=${WP_DB_PASSWORD}

# Hand off to the original WordPress entrypoint (starts Apache/PHP).
exec docker-entrypoint.sh "$@"
