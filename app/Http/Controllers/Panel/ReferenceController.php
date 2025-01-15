<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferenceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $references = Reference::paginate(10);
        return view('panel.pages.reference',compact('user','references'));
    }

    public function edit($id){
        $user = Auth::user();
        $reference = Reference::findOrFail($id);
        return view('panel.pages.reference-edit',compact('reference','user'));
    }

    public function update(Request $request, $id)
    {
        // Form verilerini doğrula
        $request->validate([
            'name' => 'required|string|max:50',
            'company' => 'nullable|string|max:50',
            'title' => 'nullable|string|max:50',
            'mail' => 'nullable|string|max:50',
            'phone' => 'nullable|string|max:50',
        ]);

        // Güncellenecek kaydı bul
        $data = Reference::findOrFail($id);

        // Verileri güncelle
        $data->name = $request->input('name');
        $data->company = $request->input('company');
        $data->title = $request->input('title');
        $data->mail = $request->input('mail');
        $data->phone = $request->input('phone');
        $data->save();

        return redirect()->back()->with('success', 'Record updated successfully!');
    }

    public function destroy($id)
    {
        // İlgili blogu bul
        $reference = Reference::findOrFail($id);

        // Blogu sil
        $reference->delete();

        // Başarı mesajı ile geri dön
        return redirect()->route('references')->with('success', 'Reference deleted successfully!');
    }

    public function create()
    {
        $user = Auth::user();
        return view('panel.pages.reference-add',compact('user'));
    }

    public function store(Request $request)
    {
        // Form doğrulaması
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'company' => 'nullable|string|max:50',
            'title' => 'nullable|string|max:50',
            'mail' => 'nullable|string|max:50',
            'phone' => 'nullable|string|max:50',
        ]);

        // Blog verilerini kaydetme
        Reference::create([
            'name' => $validatedData['name'],
            'company' => $validatedData['company'],
            'title' => $validatedData['title'],
            'mail' => $validatedData['mail'],
            'phone' => $validatedData['phone'],

        ]);

        // Başarılı işlem sonrası geri yönlendirme
        return redirect()->route('references')->with('success', 'Reference successfully created.');
    }
}
