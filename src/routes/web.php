<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
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

// いったんここ削除
// Route::get('/', [IndexController::class, 'index']);

// Route::post('/confirm', [IndexController::class, 'confirm']);

// Route::post('/store', [IndexController::class, 'store']);

// Route::get('/store', function () {
//     return redirect('/');
// });

// Route::get('/thanks', [IndexController::class, 'thanks']);

// Route::get('/admin', [AdminController::class, 'index']);

// Route ::get('/', [AuthController::class, 'index']);

// Route::middleware('auth')->group(function () {
//     Route::get('/', [AuthController::class, 'index']);
// });

// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Route::post('/register', [AuthController::class, 'register'])->name('register.submit');


// トップページ（ログイン状態で分岐）
Route::get('/', function () {
    if (Auth::check()) {
        return app(AuthController::class)->index(); // 管理画面を表示
    } else {
        return redirect('/contact'); // Contactページにリダイレクト
    }
});

// Contactページ表示
Route::get('/contact', [IndexController::class, 'index']); // Contact画面としてIndexControllerを利用

// フォーム処理
Route::post('/confirm', [IndexController::class, 'confirm']);
Route::post('/store', [IndexController::class, 'store']);
Route::get('/store', fn () => redirect('/'));
Route::get('/thanks', [IndexController::class, 'thanks']);

// 管理画面
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

// 登録処理
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
