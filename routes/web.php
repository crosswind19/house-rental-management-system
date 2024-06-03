<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AgentMiddleware;
use App\Http\Controllers\PropertyController;
use App\Http\Middleware\GuestUserMiddleware;
use App\Http\Middleware\GuestAdminMiddleware;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\UserLoginController; // Add this line

// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Auth::routes();

//User
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/')->group(function(){

    Route::middleware([GuestUserMiddleware::class])->group(function(){ //for users that are not logged in
        Route::get('/register', [UserLoginController::class, 'registerForm'])->name('registerForm'); 
        Route::post('/register', [UserLoginController::class, 'register'])->name('register'); 
        Route::get('/login', [UserLoginController::class, 'index']); 
        Route::post('/login', [UserLoginController::class, 'login'])->name('login');
    });
    
    Route::middleware(['auth', UserMiddleware::class])->group(function(){
       Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
       Route::get('/agent', [HomeController::class, 'agent'])->name('agent');
       Route::get('/property', [PropertyController::class, 'properties'])->name('properties');
       Route::get('/property/{id}', [PropertyController::class, 'property'])->name('property');
    });

    //Agent
    Route::middleware(['auth', AgentMiddleware::class])->group(function(){
           Route::get('/agent', [HomeController::class, 'agent'])->name('agent');
        });
});

//Admin
Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware([GuestAdminMiddleware::class])->group(function(){
        Route::get('/login', [AdminLoginController::class, 'index']); //shows admin login
        Route::post('/login', [AdminLoginController::class, 'login'])->name('login'); //handles admin login form
    });
    

    Route::middleware(['auth', AdminMiddleware::class])->group(function(){ //make sure the authenticated user is admin
        Route::get('/home', [AdminHomeController::class, 'index'])->name('home'); 
    });
    
});

Route::middleware(['auth'])->group(function(){
    Route::resource('properties', PropertyController::class);
});
