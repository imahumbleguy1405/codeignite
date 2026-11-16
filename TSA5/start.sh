#!/usr/bin/env bash
set -euo pipefail
cd "$(dirname "$0")"

if ! command -v php >/dev/null 2>&1; then
  echo "PHP 8.3+ is required. Install PHP and retry."
  exit 1
fi
if ! php -r 'exit(PHP_VERSION_ID >= 80300 ? 0 : 1);'; then
  echo "Laravel 13 requires PHP 8.3 or newer. Found: $(php -r 'echo PHP_VERSION;')"
  exit 1
fi
if ! command -v composer >/dev/null 2>&1; then
  echo "Composer is required. Install Composer and retry."
  exit 1
fi

if [[ ! -f .env ]]; then cp .env.example .env; fi
if [[ ! -f vendor/autoload.php ]]; then composer install; fi
if ! grep -q '^APP_KEY=base64:' .env; then php artisan key:generate; fi

echo "Starting the app at http://127.0.0.1:8000"
echo "Press Ctrl+C to stop the server."
php artisan serve --host=127.0.0.1 --port=8000
