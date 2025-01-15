<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $profile = User::where('id',1)->first();
        return view('panel.pages.profile',compact('user','profile'));
    }

    public function edit(Request $request)
    {
        // Doğrulama kuralları
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Her zaman id=1 olan kaydı getir
        $profile = User::find(1);

        if (!$profile) {
            return back()->with('error', 'Record not found.');
        }

        // Güncellemeleri atama
        $profile->name = $request->input('name');
        $profile->username = $request->input('username');
        $profile->email = $request->input('email');
        $profile->phone = $request->input('phone');
        $profile->title = $request->input('title');
        $profile->address = $request->input('address');

        // Eğer yeni bir resim yüklendiyse
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $timestamp = now()->format('YmdHis'); // Yükleme tarihi ve saati
            $originalName = $file->getClientOriginalName(); // Orijinal dosya adı
            $fileName = $timestamp . '_' . $originalName;

            // Yeni dosyayı kaydet
            $file->move(public_path('assets/upload/img/'), $fileName);

            // Resim adını veritabanına kaydet
            $profile->image = 'assets/upload/img/' . $fileName;
        }

        // Veriyi kaydet
        $profile->save();

        return back()->with('success', 'Profile section updated successfully!');
    }

}
