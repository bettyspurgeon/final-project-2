<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UserController;

use App\Http\Controllers\PropertyController;
use App\HTTP\Controllers\ContactController;
use App\Http\Controllers\ApiController;
use App\Http\Middleware\EnsureIsLoggedIn;
use Illuminate\Support\Facades\Storage;

//Routes return homepage.
Route::get('/home', function () {
    return view('homepage');
});
Route::get('/', function () {
    return view('homepage');
});
//Route to get user dashboard after login or sign up 
Route::get('/dashboard', [UserController::class, 'index'])->middleware([EnsureIsLoggedIn::class]);

//route to the page Contact
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'save']);

//About us route page
Route::get('/aboutus', function () {
    return view('aboutUs');
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

//Route to get user dashboard after login or sign up 
Route::get('/dashboard', [UserController::class, 'index'])->middleware([EnsureIsLoggedIn::class]);

//user profile update preferences and information
Route::get('/profile/{id}', [UserController::class, 'get_user_info'])->middleware([EnsureIsLoggedIn::class])->name('profile');
Route::post('/profile/{id}', [UserController::class, 'user_update'])->middleware([EnsureIsLoggedIn::class]);

//user preference management route
Route::get('/preferences/{id}', [UserController::class, 'preferences'])->middleware([EnsureIsLoggedIn::class]);
Route::post('/preferences/{id}', [UserController::class, 'update_preferences'])->middleware([EsnureIsLoggedIn::class]);
//User Logout Route
Route::get('/logout', [UserController::class, 'logout']);


/*

Routes for Property actions 

*/


//return properties page
Route::get('/properties', [PropertyController::class, 'index'])->middleware([EnsureIsLoggedIn::class]);
//create new property and store
Route::get('/properties/create', [PropertyController::class, 'create'])->middleware(EnsureIsLoggedIn::class);

Route::post('/properties/create', [PropertyController::class, 'store']);

//get a singular user's properties
Route::get('/myproperties/{id}', [PropertyController::class, 'user_properties']);

Route::get('/myproperties/update/{id}', [PropertyController::class, 'edit'])->middleware([EnsureIsLoggedIn::class])->name('properties.edit')->middleware(EnsureIsLoggedIn::class);

Route::put('/myproperties/update/{id}', [PropertyController::class, 'update'])->middleware([EnsureIsLoggedIn::class]);

Route::get('/myproperties/delete/{id}', [PropertyController::class, 'destroy'])->name('properties.delete')->middleware(EnsureIsLoggedIn::class);

//Routes for Matches


//Show Buyers and Renters Matched houses 


//Show Landlords and Sellers matched buyers/renters on each house