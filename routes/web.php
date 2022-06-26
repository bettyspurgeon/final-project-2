<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UserController;

use App\Http\Controllers\PropertyController;
use App\HTTP\Controllers\ContactController;
use App\HTTP\Controllers\LandlordController;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CoordinatesController;
use App\Http\Middleware\EnsureIsLoggedIn;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\MatchhomeController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UserProfileController;
use App\Models\Contact;
use App\Models\UserProfile;

//Routes return homepage.
Route::get('/home', function () {
    return view('UI-views.homepage');
});
Route::get('/', function () {
    return view('UI-views.homepage');
});
//Route to get user dashboard after login or sign up 
Route::get('/dashboard', [UserController::class, 'index'])->middleware([EnsureIsLoggedIn::class]);

//route to the page Contact
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'save'])->name('contact.save');

//About us route page
Route::get('/aboutus', function () {
    return view('UI-views.aboutUs');
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
Route::post('/preferences/{id}', [UserController::class, 'update_preferences']);

//forgotten password routes
Route::get('/forget-password', [ForgotPasswordController::class, 'getEmail']);
Route::post('/forget-password', [ForgotPasswordController::class, 'postEmail']);

//Reset Password routes
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'getPassword']);
Route::post('/reset-password', [ResetPasswordController::class, 'updatePassword']);

//User Logout Route
Route::get('/logout', [UserController::class, 'logout']);

//delete user account 
Route::get('/deleteaccount/{id}', [UserController::class, 'destroy']); 
/*

Routes for Property actions 

*/

//return properties page
Route::get('/properties', [PropertyController::class, 'index'])->middleware([EnsureIsLoggedIn::class]);

//create new property and store
Route::get('/properties/create', [PropertyController::class, 'create'])->middleware(EnsureIsLoggedIn::class);

Route::post('/properties/create', [PropertyController::class, 'store']);

//Interact with singular property details
Route::get('/properties/{id}', [PropertyController::class, 'show'])->middleware([EnsureIsLoggedIn::class])->name('properties.details');
Route::get('/properties/update/{id}', [PropertyController::class, 'edit'])->middleware([EnsureIsLoggedIn::class])->name('properties.edit')->middleware(EnsureIsLoggedIn::class);
Route::put('/properties/update/{id}', [PropertyController::class, 'update'])->middleware([EnsureIsLoggedIn::class]);
Route::get('/properties/delete/{id}', [PropertyController::class, 'destroy'])->name('properties.delete')->middleware(EnsureIsLoggedIn::class);

//get a singular user's properties
Route::get('/myproperties/{id}', [PropertyController::class, 'user_properties']);

Route::get('/myproperties/update/{id}', [PropertyController::class, 'edit'])->middleware([EnsureIsLoggedIn::class])->name('properties.edit')->middleware(EnsureIsLoggedIn::class);

Route::put('/myproperties/update/{id}', [PropertyController::class, 'update'])->middleware([EnsureIsLoggedIn::class]);

Route::get('/myproperties/delete/{id}', [PropertyController::class, 'destroy'])->name('properties.delete')->middleware(EnsureIsLoggedIn::class);


/*
    Manage User Documents and Salary Information (User Profile)
*/
Route::get('/user-profile/{id}', [UserProfileController::class, 'index']);

Route::post('/user-profile/{id}', [UserProfileController::class, 'upload_user_file']);


//Create a New Landlord Preference
Route::get('/landlordpreference/create/{property_id}', [LandlordController::class, 'create'])->middleware([EnsureIsLoggedIn::class]);
Route::post('/landlordpreference/create/{property_id}', [LandlordController::class, 'store'])->middleware(EnsureIsLoggedIn::class);

//Interact with singular LandlordController details
Route::get('/landlordpreference/update/{id}', [LandlordController::class, 'edit'])->middleware([EnsureIsLoggedIn::class])->name('landlordpreference.edit')->middleware(EnsureIsLoggedIn::class);
Route::post('/landlordpreference/update/{id}', [LandlordController::class, 'update'])->middleware([EnsureIsLoggedIn::class]);


/* 

Routes for Matches

*/
Route::get('/propertymatches/{id}', [MatchhomeController::class, 'display_matches']);

//return properties homepage
Route::get('/hrproperties', [PropertyController::class, 'homer_properties']);
Route::get('/hsproperties', [PropertyController::class, 'homes_properties']);

//express interest in a property and send email to property owner
Route::get('/interested-{owner_id}-{tenant_id}', [ContactController::class, 'interested_email']);

