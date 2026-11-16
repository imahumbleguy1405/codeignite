# POS Foundations — IT0049 TFA6

A four-page Point-of-Sale app built with Laravel 13 for **“From Arrays to Eloquent.”** It carries forward the TFA5 page structure and replaces the static account arrays with database records retrieved through Eloquent.

## Pages

- `/` — Landing page
- `/about` — Project and MVC overview
- `/customers` — Customer Accounts (full name, email, phone)
- `/users` — User Accounts (username, full name)

All four pages link to one another through the shared navigation. `CustomerController` and `UserController` retrieve database records through the `Customer` and `User` Eloquent models. The Blade account views display the results with `@foreach`.

The migrations create `customers` (`full_name`, `email`, `phone`) and `users` (`username`, `full_name`) tables. The `username` field is unique. The seeders create five records in each table. Startup runs migrations and seeders automatically; the seeders avoid creating duplicate sample rows on later starts.

## Requirements

- PHP 8.3 or newer
- Composer 2
- A working internet connection for Composer to download Laravel the first time

Laravel 13 requires PHP 8.3+. If you use XAMPP on Windows, check that its PHP version meets this requirement and that `C:\xampp\php` (or your XAMPP PHP folder) is available on `PATH`.

## Start on Windows

1. Extract the project folder.
2. Make sure PHP 8.3+ and Composer are installed and available in `PATH`.
3. Double-click `start.bat`.
4. Wait for Composer to install dependencies on the first run. The script prepares `.env`, generates the application key, runs the database migrations and seeders, then starts the server.
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

The first run downloads Composer dependencies. Startup also runs pending migrations and the idempotent seeders before launching the app.

## Database setup

The startup scripts configure the SQLite database and seed sample data automatically. You can also run these commands manually:

```bash
php artisan migrate --seed
```

This creates `customers` and `users` tables in `database/database.sqlite` and inserts the sample records through `CustomerSeeder` and `UserSeeder`.

## Project structure

```text
app/Http/Controllers/    PageController, CustomerController, UserController
app/Models/              Customer and User Eloquent models
database/migrations/     Customers and users table schemas
database/seeders/        Five sample rows for each table
resources/views/         Shared layout and four Blade page views
routes/web.php           Four named page routes
public/css/app.css       Responsive page styling
start.bat / start.sh     First-run setup and local server launch
```

## TFA6 requirement coverage

- `database/migrations/` creates the `customers` and `users` tables with the activity's fields; `users.username` has a unique constraint.
- `DatabaseSeeder` calls `CustomerSeeder` and `UserSeeder`; each supplies five sample records.
- `app/Models/Customer.php` and `app/Models/User.php` are the Eloquent models.
- `CustomerController` and `UserController` retrieve database rows through those models.
- The Customer Accounts and User Accounts Blade views loop over the retrieved model records with `@foreach`.

## Artisan commands

```bash
php artisan route:list
php artisan serve
```

