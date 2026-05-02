<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\View\View;

class ProjectsController extends Controller
{
    public function index(): View
    {
        $projects = Project::latest()->paginate(9);

        return view('portfolio.projects.index', compact('projects'));
    }
}

