<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $certificates = Certificate::paginate(10);
        return view('panel.pages.certificate', compact('certificates', 'user'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $certificate = Certificate::findOrFail($id);
        return view('panel.pages.certificate-edit', compact('certificate', 'user'));
    }

    public function update(Request $request, $id)
    {
        $data = Certificate::findOrFail($id);
        $data->title = $request->input('title');
        $data->date = $request->input('date');
        $data->url = $request->input('url');
        $data->description = $request->input('description');
        $data->save();

        return redirect()->back()->with('success', 'Record updated successfully!');
    }

    public function destroy($id)
    {
        $certificate = Certificate::findOrFail($id);
        $certificate->delete();
        return redirect()->route('certificates')->with('success', 'Certificate deleted successfully!');
    }

    public function create()
    {
        $user = Auth::user();
        return view('panel.pages.certificate-add', compact('user'));
    }

    public function store(Request $request)
    {
        // Form doğrulaması
        $validatedData = $request->validate([
            'title' => 'string|max:100',
            'date' => 'string|max:50',
            'url' => 'nullable',
            'description' => 'nullable|string|max:255',
        ]);

        Certificate::create([
            'title' => $validatedData['title'],
            'date' => $validatedData['date'],
            'url' => $validatedData['url'],
            'description' => $validatedData['description'],

        ]);

        // Başarılı işlem sonrası geri yönlendirme
        return redirect()->route('certificates')->with('success', 'Certificate successfully created.');
    }
}
