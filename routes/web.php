<?php

use App\Http\Controllers\LaptopController;
use App\Http\Controllers\Laptops_DetailsController;
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

Route::get('/', [Laptops_DetailsController::class, 'home']);
Route::get('/laptop', [LaptopController::class, 'index']);
Route::get('/about_us', [Laptops_DetailsController::class, 'about_us']);
Route::get('/contact_us', [Laptops_DetailsController::class, 'contact_us']);
