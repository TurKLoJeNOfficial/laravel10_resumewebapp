<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $educations = Education::paginate(10);
        return view('panel.pages.education',compact('user','educations'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $education = Education::findOrFail($id);
        return view('panel.pages.education-edit',compact('user','education'));
    }
    public function update(Request $request, $id)
    {
        $data = Education::findOrFail($id);
        $data->school_name = $request->input('school_name');
        $data->start_date = $request->input('start_date');
        $data->finish_date = $request->input('finish_date');
        $data->description = $request->input('description');
        $data->save();

        return redirect()->back()->with('success', 'Record updated successfully!');
    }


    public function destroy($id)
    {
        // İlgili blogu bul
        $experience = Education::findOrFail($id);

        // Blogu sil
        $experience->delete();

        // Başarı mesajı ile geri dön
        return redirect()->route('educations')->with('success', 'Education deleted successfully!');
    }

    public function create()
    {
        $user = Auth::user();
        return view('panel.pages.education-add', compact('user'));
    }

    public function store(Request $request)
    {
        // Form doğrulaması
        $validatedData = $request->validate([
            'school_name' => 'string|max:100',
            'start_date' => 'string|max:50',
            'finish_date' => 'nullable',
            'description' => 'nullable|string|max:255',
        ]);

        Education::create([
            'school_name' => $validatedData['school_name'],
            'start_date' => $validatedData['start_date'],
            'finish_date' => $validatedData['finish_date'],
            'description' => $validatedData['description'],

        ]);

        // Başarılı işlem sonrası geri yönlendirme
        return redirect()->route('educations')->with('success', 'Education successfully created.');
    }
}
