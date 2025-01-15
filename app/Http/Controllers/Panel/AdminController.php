<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $logs = Log::orderBy('created_at', 'desc')->paginate(20); // 20 kayıt göster
        return view('panel.pages.dashboard',compact('user','logs'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
