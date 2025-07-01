#!/bin/sh

if [ ! -f vendor/autoload.php ]; then
  echo "Installing PHP dependencies..."
  git config --global --add safe.directory /var/www/app
  composer install --no-interaction --optimize-autoloader
fi

mkdir -p storage/framework storage/logs bootstrap/cache

if [ "$DB_CONNECTION" = "sqlite" ]; then
  echo "Using SQLite database..."

  if [ ! -f database/database.sqlite ]; then
    echo "Creating SQLite database file..."
    touch database/database.sqlite
  fi
  # Ensure the database file is writable by the web server, if it exists.
  chown www-data:www-data database/database.sqlite
fi

chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

php artisan key:generate

if [ "$APP_ENV" != "production" ]; then
  echo "Running database migrations..."
  php artisan migrate --force

  echo "Running database seeders..."
  php artisan db:seed --force
fi

exec "$@"