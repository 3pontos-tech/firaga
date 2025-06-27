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
fi

chown -R www-data:www-data database storage bootstrap/cache vendor
chmod -R 775 database storage bootstrap/cache

php artisan key:generate

if [ "$APP_ENV" != "production" ]; then
  echo "Running database migrations..."
  php artisan migrate --force

  echo "Running database seeders..."
  php artisan db:seed --force
fi

exec "$@"