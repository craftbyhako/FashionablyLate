<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // public function index()
    // {
    //     return view('index');
    // }

    // 登録フォームを表示
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // 登録処理
    public function register(Request $request)
    {
        // バリデーション
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // 新規ユーザー登録処理
        \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // パスワードを暗号化
        ]);

        // 登録後にログインさせる（オプション）
        auth()->login($user);

        // ログイン後にリダイレクト
        return redirect()->route('home');
    }
}
