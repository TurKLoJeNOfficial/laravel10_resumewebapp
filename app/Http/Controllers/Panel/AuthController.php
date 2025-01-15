<?php

namespace App\Http\Controllers\Panel;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Başarılı giriş log kaydı
            Log::create([
                'ipaddress' => $request->ip(),
                'log' => 'Successful login attempt.',
                'status'=>1
            ]);

            return redirect()->route('dashboard');
        }

        // Hatalı giriş log kaydı
        Log::create([
            'ipaddress' => $request->ip(),
            'log' => 'Failed login attempt.',
            'status'=>0
        ]);

        // Giriş formuna hata mesajı ile geri dön
        return back()->withErrors(['login' => 'Invalid username or password.']);
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
