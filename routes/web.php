<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\RedisController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.index');
});
Route::get('/about', function () {
    return view('layouts.about');
});
Route::get('/blog', function () {
    return view('layouts.blog');
});
Route::get('/contact', function () {
    return view('layouts.contact');
});
Route::get('/furniture', function () {
    return view('layouts.furniture');
});

Route::get('/login', [AuthenticationController::class, 'login']);
Route::get('/redis', [RedisController::class, 'test']);
