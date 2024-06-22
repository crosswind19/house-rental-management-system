<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AgentMiddleware;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PropertyController;
use App\Http\Middleware\GuestUserMiddleware;
use App\Http\Middleware\GuestAdminMiddleware;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\PropertyTypeController;
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
Route::post('properties/{id}/check', [BookingController::class, 'checkAvailability'])->name('bookings.check');
Route::post('properties/{id}/book', [BookingController::class, 'store'])->name('bookings.store');
Route::get('/', [PropertyController::class, 'showRandomProperties'])->name('home');

Route::prefix('/')->group(function(){

    Route::middleware([GuestUserMiddleware::class])->group(function(){ //for users that are not logged in
        Route::get('/register', [UserLoginController::class, 'registerForm'])->name('registerForm'); 
        Route::post('/register', [UserLoginController::class, 'register'])->name('register'); 
        Route::get('/login', [UserLoginController::class, 'index']); 
        Route::post('/login', [UserLoginController::class, 'login'])->name('login');
        

        //Agent Register
        Route::get('/agent/register', [UserLoginController::class, 'registerFormAgent'])->name('registerFormAgent'); 
        Route::post('/agent/register', [UserLoginController::class, 'registerAgent'])->name('registerAgent'); 
    });
    
    Route::middleware(['auth', UserMiddleware::class])->group(function(){
       Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
       Route::get('/agent', [HomeController::class, 'agent'])->name('agent');
       Route::get('/property', [PropertyController::class, 'properties'])->name('properties');
       Route::get('/property/{id}', [PropertyController::class, 'property'])->name('property');
       Route::get('/profile/{user}', [UserController::class, 'show'])->name('profile.show');
       Route::get('/profile/{user}/edit', [UserController::class, 'edit'])->name('profile.edit');
       Route::put('/profile/{user}', [UserController::class, 'update'])->name('profile.update');
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

    // PropertyType Routes
    Route::resource('property-types', PropertyTypeController::class);

    // State Routes
    Route::resource('states', StateController::class);
    });
    
});

Route::middleware(['auth'])->group(function(){
    Route::resource('properties', PropertyController::class);
    Route::resource('booking', BookingController::class);

    //Test
    Route::get('manage-bookings', [BookingController::class, 'manageBookings'])->name('bookings.manage');
    Route::post('update-booking-status/{id}', [BookingController::class, 'updateBookingStatus'])->name('bookings.updateStatus');
    Route::get('tenant-bookings', [BookingController::class, 'tenantBookings'])->name('bookings.tenant');
});
