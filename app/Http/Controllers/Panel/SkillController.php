<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $skills = Skill::paginate(10);
        return view('panel.pages.skill',compact('skills','user'));
    }

    public function edit($id){
        $user = Auth::user();
        $skill = Skill::findOrFail($id);
        return view('panel.pages.skill-edit',compact('skill','user'));
    }

    public function update(Request $request, $id)
    {
        // Form verilerini doğrula
        $request->validate([
            'skill' => 'required|string|max:50',
            'ratio' => 'required|integer|min:0|max:100',
        ]);

        // Güncellenecek kaydı bul
        $data = Skill::findOrFail($id);

        // Verileri güncelle
        $data->skill = $request->input('skill');
        $data->ratio = $request->input('ratio');
        $data->save();

        return redirect()->back()->with('success', 'Record updated successfully!');
    }

    public function destroy($id)
    {
        // İlgili blogu bul
        $skill = Skill::findOrFail($id);

        // Blogu sil
        $skill->delete();

        // Başarı mesajı ile geri dön
        return redirect()->route('skills')->with('success', 'Skill deleted successfully!');
    }

    public function create()
    {
        $user = Auth::user();
        return view('panel.pages.skill-add',compact('user'));
    }

    public function store(Request $request)
    {
        // Form doğrulaması
        $validatedData = $request->validate([
            'skill' => 'required|string|max:50',
            'ratio' => 'required|integer|min:0|max:100',
        ]);

        // Blog verilerini kaydetme
        Skill::create([
            'skill' => $validatedData['skill'],
            'ratio' => $validatedData['ratio'],

        ]);

        // Başarılı işlem sonrası geri yönlendirme
        return redirect()->route('skills')->with('success', 'Blog successfully created.');
    }



}
