<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UserController;

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ApiController;
use App\Http\Middleware\EnsureIsLoggedIn;
use Illuminate\Support\Facades\Storage;




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

//Properties 


Route::get('/properties', [PropertyController::class, 'index']);

Route::get('/properties/create', [PropertyController::class, 'create'])->middleware(EnsureIsLoggedIn::class);

Route::post('/properties/create', [PropertyController::class, 'store']);

Route::get('/properties/{id}', [PropertyController::class, 'show'])->name('properties.details');

Route::get('/properties/update/{id}', [PropertyController::class, 'edit'])->name('properties.edit')->middleware(EnsureIsLoggedIn::class);
Route::put('/properties/update/{id}', [PropertyController::class, 'update']);

// Route::delete('/properties/delete/{id}', [PropertyController::class, 'destroy'])->name('properties.delete');
Route::get('/properties/delete/{id}', [PropertyController::class, 'destroy'])->name('properties.delete')->middleware(EnsureIsLoggedIn::class);



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

//route to the page Contact
Route::get('/contact', function() {
    return view('contact-page');
});