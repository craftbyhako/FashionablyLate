<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::post('/contacts', [IndexController::class, 'store']);

//確認ページ、サンクスページ、管理画面、ユーザ登録ページ、ログインページ
//Route::get('/confirm', [indexController::class, 'index']);
//Route::get('/thanks', [indexController::class, 'index']);
//Route::get('/admin', [indexController::class, 'index']);
//Route::get('/register', [indexController::class, 'index']);
//Route::get('/login', [indexController::class, 'index']);