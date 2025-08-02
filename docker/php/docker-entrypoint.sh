#!/bin/sh
set -e

# Set permissions for storage and cache directories.
# This is necessary because named volumes are mounted as root by default.
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache /var/www/database

# Execute the command passed to this script (i.e., the Dockerfile's CMD)
exec "$@"