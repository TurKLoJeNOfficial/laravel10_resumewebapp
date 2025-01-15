<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $experiences = Experience::paginate(10);
        return view('panel.pages.experience', compact('user', 'experiences'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $experience = Experience::findOrFail($id);
        return view('panel.pages.experience-edit', compact('experience', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'string|max:50',
            'company' => 'string|max:50',
            'company_url' => 'string|max:50',
            'start_date' => 'nullable',
            'finish_date' => 'nullable',
            'description' => 'nullable|string|max:255',
        ]);
        // Güncellenecek kaydı bul
        $data = Experience::findOrFail($id);

        // Verileri güncelle
        $data->title = $request->input('title');
        $data->company = $request->input('company');
        $data->company_url = $request->input('company_url');
        $data->start_date = $request->input('start_date');
        $data->finish_date = $request->input('finish_date');
        $data->description = $request->input('description');
        $data->save();

        return redirect()->back()->with('success', 'Record updated successfully!');
    }

    public function destroy($id)
    {
        // İlgili blogu bul
        $experience = Experience::findOrFail($id);

        // Blogu sil
        $experience->delete();

        // Başarı mesajı ile geri dön
        return redirect()->route('experiences')->with('success', 'Skill deleted successfully!');
    }

    public function create()
    {
        $user = Auth::user();
        return view('panel.pages.experience-add', compact('user'));
    }

    public function store(Request $request)
    {
        // Form doğrulaması
        $validatedData = $request->validate([
            'title' => 'string|max:50',
            'company' => 'string|max:50',
            'company_url' => 'string|max:50',
            'start_date' => 'nullable',
            'finish_date' => 'nullable',
            'description' => 'nullable|string|max:255',
        ]);

        Experience::create([
            'title' => $validatedData['title'],
            'company' => $validatedData['company'],
            'company_url' => $validatedData['company_url'],
            'start_date' => $validatedData['start_date'],
            'finish_date' => $validatedData['finish_date'],
            'description' => $validatedData['description'],

        ]);

        // Başarılı işlem sonrası geri yönlendirme
        return redirect()->route('experiences')->with('success', 'Blog successfully created.');
    }
}
