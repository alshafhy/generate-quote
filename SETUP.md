# Laravel Login Page Setup Guide

This is a complete Laravel application with a Bootstrap login page matching your design specification.

## Requirements

- PHP 8.2 or higher
- Composer
- SQLite (built-in support)

## Installation Steps

### 1. Install Dependencies
```bash
composer install
```

### 2. Set Environment Variables
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Create Database
```bash
php artisan migrate
```

### 4. Seed Test User
```bash
php artisan db:seed
```

### 5. Run Development Server
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## Default Test Account

- **Email:** test@example.com
- **Password:** password123

## Project Structure

```
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── AuthController.php      # Authentication logic
│   └── Models/
│       └── User.php                    # User model
├── resources/
│   └── views/
│       ├── auth/
│       │   └── login.blade.php        # Login page (Arabic RTL)
│       └── dashboard.blade.php         # Dashboard page
├── routes/
│   └── web.php                         # Web routes
├── database/
│   └── migrations/                     # Database migrations
│   └── seeders/                        # Database seeders
└── config/                             # Configuration files
```

## Features

- ✅ Arabic RTL Login Page
- ✅ Bootstrap 5.3 Styling
- ✅ Password Hashing with bcrypt
- ✅ Session Management
- ✅ Remember Me Functionality
- ✅ CSRF Protection
- ✅ SQLite Database

## Customization

### Change Database
To use MySQL instead of SQLite:

1. Update `.env` file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=your_password
```

2. Run migrations:
```bash
php artisan migrate
```

### Add More Users
Edit `database/seeders/DatabaseSeeder.php` to add more test users.

## Troubleshooting

**Migrations won't run:**
```bash
php artisan migrate:refresh
php artisan db:seed
```

**Clear cache:**
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

**Permission errors:**
```bash
chmod -R 755 storage bootstrap/cache
```
