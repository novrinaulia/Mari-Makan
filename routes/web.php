<?php

use Illuminate\Support\Facades\Route;

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

// Frontend
// Dashboard - Homepage
Route::get('/home', [App\Http\Controllers\frontend\DashboardController::class, 'index'])->name('home.index');
// Dashboard - Menu
Route::get('/menu', [App\Http\Controllers\frontend\RestaurantsController::class, 'index'])->name('makanan.index');
// Dashboard - About
Route::get('/about', [App\Http\Controllers\frontend\AboutController::class, 'index'])->name('about.index');
// Dashboard - Contact
Route::get('/contact', [App\Http\Controllers\frontend\ContactController::class, 'index'])->name('contact.index');
Route::POST('/addKritik', [App\Http\Controllers\KritikController::class, 'store'])->name('contact.store');



// Dashboard Admin
Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.index');

// Restaurant
Route::get('/restaurant', [App\Http\Controllers\RestaurantController::class, 'index'])->name('restaurant.index');
Route::get('/addResto', [App\Http\Controllers\RestaurantController::class, 'create'])->name('restaurant.create');
Route::POST('/addResto', [App\Http\Controllers\RestaurantController::class, 'store'])->name('restaurant.store');
Route::get('/editResto/{id}', [App\Http\Controllers\RestaurantController::class, 'edit'])->name('restaurant.edit');
Route::POST('/editResto/{id}', [App\Http\Controllers\RestaurantController::class, 'update'])->name('restaurant.update');
Route::delete('/deleteResto/{id}', [App\Http\Controllers\RestaurantController::class, 'destroy'])->name('restaurant.destroy');

// List Menu
Route::get('/adminMenu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu.index');
Route::get('/addMenu', [App\Http\Controllers\MenuController::class, 'create'])->name('menu.create');
Route::POST('/addMenu', [App\Http\Controllers\MenuController::class, 'store'])->name('menu.store');
Route::get('/editMenu/{id}', [App\Http\Controllers\MenuController::class, 'edit'])->name('menu.edit');
Route::POST('/editMenu/{id}', [App\Http\Controllers\MenuController::class, 'update'])->name('menu.update');
Route::delete('/deleteMenu/{id}', [App\Http\Controllers\MenuController::class, 'destroy'])->name('menu.destroy');

// Kritik & Saran
Route::get('/kritik', [App\Http\Controllers\KritikController::class, 'index'])->name('kritik.index');
Route::get('/deletekritik/{id}', [App\Http\Controllers\KritikController::class, 'destroy'])->name('kritik.destroy');