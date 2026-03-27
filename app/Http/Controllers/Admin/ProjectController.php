<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'    => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'link'     => 'required|url',
            'image'    => 'nullable|string',
            'tags'     => 'required|string',
            'span'     => 'required|string',
            'color'    => 'nullable|string',
        ]);

        Project::create($data);
        return back()->with('success', 'Project added successfully!');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return back()->with('success', 'Project deleted!');
    }
}
