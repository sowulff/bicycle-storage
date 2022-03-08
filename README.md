<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## A bicycle distributor made in Laravel (+Tailwind)

# Installation

1. Clone the repository
    - ```bash
      git clone https://github.com/sowulff/bicycle-storage/
      cd ./bicycle-storage
      ```
2. Open the project in your text editor.
3. Create an .env file from the .env.example and fill in your credentials.
    - Open the .env file and add the database name, username and password.
    - Close the .env file
4. Install dependencies for PHP and node.js
    - ```bash
      composer install
      npm install
      ```
5. Generate application key.
    - ```bash
      php artisan key:generate
      ```
6. Run migrations to create database structure & seed in dummy data.
    - ```bash
      php artisan migrate:fresh --seed
      This will create 10 users + 2 testing users.
      admin@admin.com, password: admin123
      tester@tester.com, password: tester123
      ```
7. Build javascript and css files
    - ```bash
      npm run dev
      ```
    - _You might have to do this twice the first time._
8. Run the php server.
    - ```bash
      php artisan serve
      ```
10. You´re all set, now visit the site at [http://localhost:8000](http://localhost:8000).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
