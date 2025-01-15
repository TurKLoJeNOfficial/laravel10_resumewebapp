<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $settings = Setting::where('id',1)->first();
        return view('panel.pages.settings',compact('user','settings'));
    }
    public function edit(Request $request)
    {
        $user = Auth::user();
        // Doğrulama
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'keyword' => 'nullable|string|max:255',
            'author' => 'nullable|string|max:255',
            'color' => 'required|string|in:black,pink,purple,blue,indigo,cyan,aqua,teal,green,orange,yellow,gray,brown,red,amber,deep-orange',
            'music' => 'nullable|string|max:255',
            'footer' => 'nullable|string|max:255',
        ]);

        // İlgili kaydı bul
        $settings = Setting::findOrFail(1);

        // Verileri güncelle
        $settings->title = $validatedData['title'];
        $settings->description = $validatedData['description'] ?? $settings->description;
        $settings->keyword = $validatedData['keyword'] ?? $settings->keyword;
        $settings->author = $validatedData['author'] ?? $settings->author;
        $settings->color = $validatedData['color'];
        $settings->music = $validatedData['music'] ?? $settings->music;
        $settings->footer = $validatedData['footer'] ?? $settings->footer;

        // Kaydet
        $settings->save();

        // Başarı mesajıyla geri yönlendir
        return redirect()->route('settings')->with('success', 'Settings updated successfully.');
    }

}
