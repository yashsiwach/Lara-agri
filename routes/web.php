<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchemeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\AuthController;

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

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [AuthController::class, 'showDashboard'])->middleware('auth')->name('dashboard');


// Government Schemes routes
Route::get('/schemes', [SchemeController::class, 'index'])->name('schemes.index');
Route::get('/schemes/{id}', [SchemeController::class, 'show'])->name('schemes.show');

// Information pages routes
Route::get('/information', [InformationController::class, 'index'])->name('information.index');
Route::get('/information/crop-information', [InformationController::class, 'cropInformation'])->name('information.crop');
Route::get('/information/livestock-information', [InformationController::class, 'livestockInformation'])->name('information.livestock');
Route::get('/information/{slug}', [InformationController::class, 'show'])->name('information.show');