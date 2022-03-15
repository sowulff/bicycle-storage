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

## Code review 
of Simon and Jennifer
1. Can not see a test for uploads?
2. Can not see a test for logout?
3. Would be nice to view the bicycles added as favorites on the page.
4. Maybe some short comments on the code.
5. buyBiCycleTest.php - capital B in Buy instead av small.
6. When you edit an item in the edit-function the price is changing, removes the last figures in the price.
7. When you miss to fill in an input when you edit your item you are redirected to an error site. Thar can probably be resolved with a validation.
8. You could use a capital F in Favorite (removeFavorite.php in Controller.
9. When you try to log in with the wrong username or password you can see an error message. You could maybe change the message so that you can understand what you did wrong.
10. When you try to register a user and miss something you can see an error message. You could maybe change the message so that you can understand what you did wrong.
11. When you delete an item you can see an alert with a message that is wrong written and wrong spelled.
12. You could look over the possibilities for only admin to edit an item for someone else. Now everyone can do that.
13. Very structured and clean code. Nice!
14. Hash is not used in the EditUserController so you can remove: use Illuminate\Support\Facades\Hash; 
15. Auth is not used in the UploadController so you can remove: use Illuminate\Support\Facades\Auth;
16. FlashMessages.blade maybe could use a comment explanation so that you can understand what it is about, other blade-files you can understand by the name :)
17. Maybe it was just me but on the website I could not really understand when I saw this error-message: “Please check the form for errors” - FlashMessages.blade on line 27.
18. Can not see that you are using the ViewBicycleController? Maybe you dont have to write anything inside a view-controller.
19. Needed to run: run dev build aswell to open your project so maybe you can add that to the readme file.
20. Very good job guys :)

