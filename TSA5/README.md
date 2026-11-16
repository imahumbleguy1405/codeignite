# POS Foundations — IT0049 TFA5

A four-page Point-of-Sale foundation app built with Laravel 13 for **“From Zero to Four Pages, Again: Your First Laravel Application.”**

## Pages

- `/` — Landing page
- `/about` — Project and MVC overview
- `/customers` — Customer Accounts (full name, email, phone)
- `/users` — User Accounts (username, full name, role)

All four pages link to one another through the shared navigation. `CustomerController` and `UserController` each define five sample records in a static PHP array. The Blade account views display them with `@foreach`. The pages do not query a database.

An optional migration and seeders are included under `database/` to satisfy the lab submission note. They are not used by the four page views and are not needed to start the app.

## Requirements

- PHP 8.3 or newer
- Composer 2
- A working internet connection for Composer to download Laravel the first time

Laravel 13 requires PHP 8.3+. If you use XAMPP on Windows, check that its PHP version meets this requirement and that `C:\xampp\php` (or your XAMPP PHP folder) is available on `PATH`.

## Start on Windows

1. Extract the project folder.
2. Make sure PHP 8.3+ and Composer are installed and available in `PATH`.
3. Double-click `start.bat`.
4. Wait for Composer to install dependencies on the first run. The script prepares `.env`, generates the application key, and starts the server.
5. Open <http://127.0.0.1:8000>.

You can also open a terminal in this folder and run:

```powershell
.\start.bat
```

## Start on macOS or Linux

From a terminal in the extracted folder:

```bash
chmod +x start.sh
./start.sh
```

The first run downloads Composer dependencies. Later runs start the app directly.

## Optional migration and seed data

The activity pages intentionally continue to use static arrays. If you want to create the optional SQLite tables and insert the matching examples, start the app once first, then run:

```bash
php artisan migrate --seed
```

This creates `customers` and `staff_users` tables in `database/database.sqlite`. It does not change the data source used by the pages.

## Project structure

```text
app/Http/Controllers/    PageController, CustomerController, UserController
database/migrations/     Optional account tables
database/seeders/        Optional sample database rows
resources/views/         Shared layout and four Blade page views
routes/web.php           Four named page routes
public/css/app.css       Responsive page styling
start.bat / start.sh     First-run setup and local server launch
```

## Artisan commands

```bash
php artisan route:list
php artisan serve
```

