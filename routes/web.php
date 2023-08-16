<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PagesController;

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

Route::get('home', [PagesController::class, 'home']);
Route::get('about', [PagesController::class, 'about']);
Route::get('contact', [PagesController::class, 'contact']);
Route::get('students', [PagesController::class, 'contact']);