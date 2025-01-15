<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $projects = Project::paginate(10);
        return view('panel.pages.project', compact('projects', 'user'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $project = Project::findOrFail($id);
        return view('panel.pages.project-edit', compact('project', 'user'));
    }

    public function update(Request $request, $id)
    {
        $data = Project::findOrFail($id);
        $data->project_name = $request->input('project_name');
        $data->project_type = $request->input('project_type');
        $data->project_url = $request->input('project_url');
        $data->project_description = $request->input('project_description');
        $data->save();

        return redirect()->back()->with('success', 'Record updated successfully!');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('projects')->with('success', 'Project deleted successfully!');
    }

    public function create()
    {
        $user = Auth::user();
        return view('panel.pages.project-add', compact('user'));
    }

    public function store(Request $request)
    {
        // Form doğrulaması
        $validatedData = $request->validate([
            'project_name' => 'string|max:100',
            'project_type' => 'string|max:50',
            'project_url' => 'nullable',
            'project_description' => 'nullable|string|max:255',
        ]);

        Project::create([
            'project_name' => $validatedData['project_name'],
            'project_type' => $validatedData['project_type'],
            'project_url' => $validatedData['project_url'],
            'project_description' => $validatedData['project_description'],

        ]);

        // Başarılı işlem sonrası geri yönlendirme
        return redirect()->route('projects')->with('success', 'Project successfully created.');
    }
}
