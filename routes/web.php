<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeleteBicycleController;
use App\Http\Controllers\ListAllBicyclesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterNewUserController;
use App\Http\Controllers\UploadController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
->name(login) renames welcome to "login" so that 'auth' can point to the login-page a.k.a startpage in our case.
*/

Route::get('/', function () {
    return view('welcome');
})->name('login');
Route::post('login', LoginController::class);
Route::get('dashboard', DashboardController::class)->middleware('auth');
Route::get('logout', LogoutController::class)->middleware('auth');
Route::post('upload', UploadController::class)->middleware('auth');
Route::view('admin', 'admin/upload')->name('upload');
Route::get('bicycles/all', ListAllBicyclesController::class)->middleware('auth');
Route::get('registerNewUser', function () {
    return view('registerNewUser');
});
Route::post('registerNewUser', RegisterNewUserController::class)->name('registerNewUser')->middleware('guest');

Route::post('deleteBicycle/{bicycle:id}', [
    'as' => 'deleteBicycle',
    'uses' => DeleteBicycleController::class
]);
