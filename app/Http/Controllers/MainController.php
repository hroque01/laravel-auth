<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class MainController extends Controller
{
    public function home()
    {
        $projects = Project::all();

        return view('pages.home', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('pages.project.show', compact('project'));
    }

    public function create()
    {
        return view('pages.project.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:3|max:64|unique:projects',
            'description' => 'nullable|string',
            'main_image' => 'required|string|unique:projects',
            'release date' => 'required|date|before:date',
            'repo_link' => 'required|string|unique:projects',
        ]);

        $project = Project::create($data);

        return redirect()->route('project.show', $project);
    }

// public function privateHome()
// {
//     return view('pages.private-home');
// }
}