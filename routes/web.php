<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditUserController;
use App\Http\Controllers\ListAllBicyclesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MakeAdminController;
use App\Http\Controllers\RegisterNewUserController;
use App\Http\Controllers\RemoveAdminController;
use App\Http\Controllers\RemoveUserController;
use App\Http\Controllers\UploadController;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
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
Route::get('bicycles/all', ListAllBicyclesController::class)->middleware('auth');
Route::get('registerNewUser', function () {
    return view('registerNewUser');
});
Route::post('registerNewUser', RegisterNewUserController::class)->name('registerNewUser')->middleware('guest');


Route::middleware(['CheckAdminStatus', 'auth'])->group(function () {
    Route::post('upload', UploadController::class);
    Route::view('admin', 'admin/upload')->name('upload');
    Route::post('editUser/{bicycle:id}', [
        'as' => 'editUser',
        'uses' => EditUserController::class,

    ]);
    Route::get('editUser/{user}', function (User $user) {
        return view('admin.editUser', [
            'user' => $user,
        ]);
    });
    Route::post('removeUser/{user:id}', [
        'as'   => 'removeUser',
        'uses' => RemoveUserController::class,
    ]);
    Route::get('adminPanel', AdminPanelController::class)->middleware('auth');
    Route::post('makeAdmin/{user:id}', [
        'as'   => 'makeAdmin',
        'uses' => MakeAdminController::class,
    ]);
    Route::post('removeAdmin/{user:id}', [
        'as'   => 'removeAdmin',
        'uses' => RemoveAdminController::class,
    ]);
});
