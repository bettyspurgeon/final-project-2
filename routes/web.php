<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UserController;
use App\Http\Middleware\EnsureIsLoggedIn;

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

Route::get('/', function () {
    return view('welcome');
});
/*
    Routes for User Actions
*/
//User Login Routes
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'authenticated']);

//User Register Routes
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'register_submit']);

//User Logout Route
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/home', function () {
    return view('homepage');
});

//Route to get user dashboard after login or sign up 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware([EnsureIsLoggedIn::class]);


//user profile update preferences and information
Route::get('/profile', [UserController::class, 'get_user_info'])->middleware([EnsureIsLoggedIn::class]);
Route::post('/profile', [UserController::class, 'user_update']);