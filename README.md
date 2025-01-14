# Laravolt Livewire Boilerplate

This is a boilerplate project for Laravel using Livewire, and Volt for Admin Dashboard.

## Getting Started

Follow these instructions to get the project up and running on your local machine.

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js & NPM/Yarn
- Laravel CLI

### Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/rzki/laravolt-livewire-boilerplate.git
    cd laravel-volt-livewire-boilerplate
    ```

2. Install the dependencies:
    ```bash
    composer install
    npm install && npm run build
    ```
    ```npm run build``` are needed to build the assets

3. Copy the `.env.example` file to `.env`:
    ```bash
    cp .env.example .env
    ```
    Don't forget to change the DB credentials to your likings.

4. Generate the application key:
    ```bash
    php artisan key:generate
    ```

5. Run the migrations:
    ```bash
    php artisan migrate
    ```

6. Serve the application:
    ```bash
    php artisan serve
    ```

Your application should now be running at `http://localhost:8000`.

Login credential
```
Email       : superadmin@test.com
Passsword   : Superadmin2024!
```
## Credits

This project is using Volt admin dashboard based on the Larastarter package by [Laravel Daily](https://github.com/LaravelDaily/Larastarter).
