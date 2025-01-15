<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $password = User::where('id',1)->first();
        return view('panel.pages.password',compact('user','password'));
    }

    public function edit(Request $request)
    {
        // Giriş yapan kullanıcıyı al
        $user = Auth::user();
        $users = User::find(1);

        // Doğrulama
        $request->validate([
            'password' => 'required',
            'newpassword' => 'required|min:8|confirmed', // confirmed: newpassword ve newpassword_confirmation eşleşir
        ]);

        // Eski şifre doğrulama
        if (!Hash::check($request->password, $users->password)) {
            return back()->withErrors(['password' => 'The current password is incorrect.']);
        }

        // Şifreleri eşleştirme
        if ($request->newpassword !== $request->newpassword_confirmation) {
            return back()->withErrors(['newpassword' => 'The new passwords do not match.']);
        }

        // Yeni şifreyi güncelleme
        $users->password = Hash::make($request->newpassword);
        $users->save();

        // Başarı mesajı ve yönlendirme
        return back()->with('success', 'Password updated successfully.');
    }

}
