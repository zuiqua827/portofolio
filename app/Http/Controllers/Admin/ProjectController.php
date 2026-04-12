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

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        Project::create($request->all());
        return redirect()->route('projects.index')->with('success', 'Berhasil tambah project');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        return redirect()->route('projects.index')->with('success', 'Berhasil update');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return back()->with('success', 'Berhasil hapus');
    }
}