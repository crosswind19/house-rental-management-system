<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AgentMiddleware;
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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//User

Route::get('/', [HomeController::class, 'index'])->name('dashboard');


Route::prefix('/')->group(function(){

    Route::middleware([GuestUserMiddleware::class])->group(function(){ //for users that are not logged in
        Route::get('/login', [UserLoginController::class, 'index']); 
        Route::post('/login', [UserLoginController::class, 'login'])->name('login');
    });
    
    Route::middleware(['auth', UserMiddleware::class])->group(function(){
    //    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
       Route::get('/agent', [HomeController::class, 'agent'])->name('agent');
    });

    Route::middleware(['auth', AgentMiddleware::class])->group(function(){
        //    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
           Route::get('/agent', [HomeController::class, 'agent'])->name('agent');
        });
    
});

//Agent

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
