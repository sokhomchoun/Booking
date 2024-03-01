<?php

use App\Http\Controllers\CambodiaController;
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
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
use App\Models\Province;
use App\Models\RoomType;

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


// end route for view page 

// Register dashboard
Route::get('/register', function (){ return view('register');})->name('register');
Route::post('/register', [UserController::class, 'Register'])->name('createAccount');
// Login dashoboard
Route::get('/login', function (){ return view('login');})->name('login');
Route::post('login', [UserController::class , 'login'])->name('user.login');
Route::post('/logout', [UserController::class, 'testLogout'])->name('logout');
Route::get('auth/google', [GoogleController::class, 'googlepage'])->name('login-google');
Route::get('auth/google/callback', [GoogleController::class, 'googlecallback']);
Route::get('auth/facebook', [FacebookController::class, 'facebookpage'])->name('login-facebook');
Route::get('auth/facebook/callback', [FacebookController::class, 'facebooklogin']);


Route::middleware(['auth:sanctum'])->group(function () {
    // Your protected routes go here

    // Hotel
    Route::get('/addhotel/',[HotelController::class,'showhotel']);
    Route::get('/addhotel',[HotelController::class,'getalldate']);
    Route::post('/addhotel',[HotelController::class, 'createhotel'])->name('dashboard.hotel.addhotel');
    Route::get('/deletehotel/{id}',[HotelController::class,'deletehotel']);
    Route::get('/edithotel/{id}',[HotelController::class,'edithotel']);
    Route::put('/updatehotel/{id}',[HotelController::class,'updatehotel']);

    // Category
    Route::get('/addcategory',[CategoryController::class,'showcategory']);
    Route::post('/addcategory',[CategoryController::class, 'createcategory'])->name('dashboard.category.addcategory');
    Route::get('/addcategory',[CategoryController::class,'getcategory']);
    Route::get('/delete_category/{id}',[CategoryController::class,'deletecate']);
    Route::get('/editcate/{id}',[CategoryController::class,'editcate']);
    Route::put('/updatecate/{id}',[CategoryController::class,'updatecate']);
    Route::get('/searchcate',[CategoryController::class,'searchcate']);

    // Province
    Route::get('/addprovince',[ProvinceController::class,'showprovince']);
    Route::post('/addprovince',[ProvinceController::class,'createprovince'])->name('dashboard.province.addprovince');
    Route::get('/addprovince',[ProvinceController::class,'getprovince']);
    Route::get('/deleteProvince/{id}',[ProvinceController::class,'deleteProvince']);
    Route::get('/editpro/{id}',[ProvinceController::class,'editpro']);
    Route::put('/updatepro/{id}',[ProvinceController::class,'updatepro']);
    Route::get('/searchpro',[ProvinceController::class,'searchpro']);

    // Cambodia
    Route::get('/addcambodia',[CambodiaController::class,'showcambodia']);
    Route::post('/addcambodia',[CambodiaController::class,'createcambodia'])->name('dashboard.cambodia.addcambodia');
    Route::get('/addcambodia',[CambodiaController::class,'getcambodia']);
    Route::get('/deleteCambodia/{id}',[CambodiaController::class,'deleteCambodia']);
    Route::get('/editcam/{id}',[CambodiaController::class,'editcam']);
    Route::put('/updatecam/{id}',[CambodiaController::class,'updatecam']);

    // Room
    Route::get('/addroom',[RoomController::class,'showroom']);
    Route::post('/addroom',[RoomController::class,'createroom'])->name('dashboard.room.addroom');
    Route::get('/addroom',[RoomController::class,'getroom']);
    Route::get('/deleteroom/{id}',[RoomController::class,'deleteroom']);
    Route::get('/editroom/{id}',[RoomController::class,'editroom']);
    Route::put('/updateroom/{id}',[RoomController::class,'updateroom']);

    // Room Type
    Route::get('/roomtype/',[RoomTypeController::class,'showroomtype']);
    Route::post('roomtype',[RoomTypeController::class,'createroomtype'])->name('dashboard.roomtype.roomtype');
    Route::get('/roomtype',[RoomTypeController::class,'getroomtype']);
    Route::get('/deletetype/{id}',[RoomTypeController::class,'deletetype']);
    Route::get('/edittype/{id}',[RoomTypeController::class,'edittype']);
    Route::put('/updatetype/{id}',[RoomTypeController::class,'updatetype']);

});


Route::middleware(['auth', 'is_admin'])->group(function () {
    // Admin routes
    Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard.index');
    // ... other admin routes
});



