# Laravel Contact Form System

A beginner-friendly Laravel application demonstrating essential Laravel concepts with a simple contact form system.

## Features

- Contact form with validation
- Message storage using Laravel models
- Display of submitted messages
- CSRF protection
- Error handling
- Responsive design with Tailwind CSS

## Requirements

- PHP 8.x
- Composer
- SQLite or MySQL

## Installation

1. Clone this repository
   ```bash
   git clone https://github.com/yourusername/laravel-contact-form-system.git
   cd laravel-contact-form-system
   ```

2. Install dependencies
   ```bash
   composer install
   ```

3. Copy the environment file
   ```bash
   cp .env.example .env
   ```

4. Generate application key
   ```bash
   php artisan key:generate
   ```

5. Set up your database in `.env` file
   ```
   DB_CONNECTION=sqlite
   # or
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_contact
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. Run migrations
   ```bash
   php artisan migrate
   ```

7. Start the development server
   ```bash
   php artisan serve
   ```

8. Visit http://localhost:8000/contact to see the contact form

## Project Structure

- **Routes**: Defined in `routes/web.php`
- **Controller**: `app/Http/Controllers/ContactController.php`
- **Model**: `app/Models/Contact.php`
- **Views**:
  - `resources/views/layouts/app.blade.php`
  - `resources/views/contact.blade.php`
  - `resources/views/messages.blade.php`
- **Migration**: `database/migrations/xxxx_xx_xx_create_contacts_table.php`

## Learning Laravel

This project demonstrates:
- Route definition and naming
- Controller creation
- Model and database interaction
- Form validation and error handling
- CSRF protection
- Blade templating
- Flash messages

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).