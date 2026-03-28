<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // عرض صفحة تسجيل الدخول
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // تنفيذ عملية تسجيل الدخول
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // إذا كانت البيانات صحيحة → يدخل على صفحة الكتب
            return redirect()->route('books.index');
        }

        // إذا كانت البيانات خاطئة → يرجع لنفس الصفحة مع رسالة خطأ
        return back()->withErrors(['login' => 'Invalid credentials']);
    }

    // تنفيذ عملية تسجيل الخروج
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
