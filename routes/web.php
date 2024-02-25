<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProvinceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route for view page 

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/addhotel',function(){
    return view('dashboard.hotel.addhotel');
});
Route::get('/addcategory',function(){
    return view('dashboard.category.addcategory');
});
Route::get('/addprovince',function(){
    return view('dashboard.province.addprovince');
});

// end route for view page 


Route::get('/register', function (){ return view('register');})->name('register');
Route::post('/register', [UserController::class, 'Register'])->name('createAccount');





Route::middleware(['auth:sanctum'])->group(function () {
    // Your protected routes go here
//     Route::get('/student', [StudentController::class , 'index'])->name('student.index');
//    // Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard.index');
//     Route::get('/student/create', [StudentController::class , 'viewcreate'])->name('student.viewcreate');
//     Route::post('/student', [StudentController::class , 'create'])->name('student.create');
    // Hotel
    Route::post('/addhotel',[HotelController::class, 'createhotel'])->name('dashboard.hotel.addhotel');

    // Category
    Route::post('/addcategory',[CategoryController::class, 'createcategory'])->name('dashboard.category.addcategory');

    // Province
    Route::post('addprovince',[ProvinceController::class,'createprovince'])->name('dashboard.province.addprovince');

});

Route::middleware(['auth', 'is_admin'])->group(function () {
    // Admin routes
    Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard.index');

    // ... other admin routes
});


// Route::post('/login', [UserController::class, 'logout'])->name('logout');
Route::get('/login', function (){ return view('login');})->name('login');
Route::post('login', [UserController::class , 'login'])->name('user.login');
Route::post('/logout', [UserController::class, 'testLogout'])->name('logout');
Route::get('auth/google', [GoogleController::class, 'googlepage'])->name('login-google');
Route::get('auth/google/callback', [GoogleController::class, 'googlecallback']);
Route::get('auth/facebook', [FacebookController::class, 'facebookpage'])->name('login-facebook');
Route::get('auth/facebook/callback', [FacebookController::class, 'facebooklogin']);

