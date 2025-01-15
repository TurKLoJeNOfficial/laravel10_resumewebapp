<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $languages = Language::paginate(10);
        return view('panel.pages.language',compact('languages','user'));
    }

    public function edit($id){
        $user = Auth::user();
        $language = Language::findOrFail($id);
        return view('panel.pages.language-edit',compact('language','user'));
    }

    public function update(Request $request, $id)
    {
        // Form verilerini doğrula
        $request->validate([
            'language' => 'required|string|max:50',
            'ratio' => 'required|integer|min:0|max:100',
        ]);

        // Güncellenecek kaydı bul
        $data = Language::findOrFail($id);

        // Verileri güncelle
        $data->language = $request->input('language');
        $data->ratio = $request->input('ratio');
        $data->save();

        return redirect()->back()->with('success', 'Record updated successfully!');
    }

    public function destroy($id)
    {
        // İlgili blogu bul
        $language = Language::findOrFail($id);

        // Blogu sil
        $language->delete();

        // Başarı mesajı ile geri dön
        return redirect()->route('languages')->with('success', 'Language deleted successfully!');
    }

    public function create()
    {
        $user = Auth::user();
        return view('panel.pages.language-add',compact('user'));
    }

    public function store(Request $request)
    {
        // Form doğrulaması
        $validatedData = $request->validate([
            'language' => 'required|string|max:50',
            'ratio' => 'required|integer|min:0|max:100',
        ]);

        // Blog verilerini kaydetme
        Language::create([
            'language' => $validatedData['language'],
            'ratio' => $validatedData['ratio'],

        ]);

        // Başarılı işlem sonrası geri yönlendirme
        return redirect()->route('languages')->with('success', 'Language successfully created.');
    }
}
