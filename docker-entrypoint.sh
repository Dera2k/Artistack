#!/usr/bin/env bash
set -euo pipefail

cd /app

# Generate application key
php artisan key:generate --force --ansi

# Create storage symlink if missing
if [ ! -L public/storage ]; then
    php artisan storage:link --ansi
fi

# Run database migrations
php artisan migrate --force --ansi

exec "$@"
