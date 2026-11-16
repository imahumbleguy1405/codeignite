@echo off
setlocal
cd /d "%~dp0"

where php >nul 2>nul
if errorlevel 1 (
  echo PHP was not found. Install PHP 8.3 or newer and add it to PATH.
  echo If you use XAMPP, add its php folder, for example C:\xampp\php, to PATH.
  pause
  exit /b 1
)
php -r "exit(PHP_VERSION_ID >= 80300 ? 0 : 1);"
if errorlevel 1 (
  echo Laravel 13 requires PHP 8.3 or newer. Update your PHP installation first.
  php -v
  pause
  exit /b 1
)
where composer >nul 2>nul
if errorlevel 1 (
  echo Composer was not found. Install Composer and reopen this window.
  pause
  exit /b 1
)

if not exist .env copy .env.example .env >nul
if not exist vendor\autoload.php (
  echo Installing Laravel dependencies. This can take a few minutes...
  composer install
  if errorlevel 1 (
    pause
    exit /b 1
  )
)
findstr /C:"APP_KEY=base64:" .env >nul
if errorlevel 1 php artisan key:generate

echo.
echo Starting the app at http://127.0.0.1:8000
echo Press Ctrl+C to stop the server.
php artisan serve --host=127.0.0.1 --port=8000
pause
