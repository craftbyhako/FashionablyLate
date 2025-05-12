<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [IndexController::class, 'index']);

Route::post('/confirm', [IndexController::class, 'confirm']);

Route::post('/store', [IndexController::class, 'store']);

Route::get('/store', function () {
    return redirect('/');
});

Route::get('/thanks', [IndexController::class, 'thanks']);

Route::get('/admin', [AdminController::class, 'index']);
