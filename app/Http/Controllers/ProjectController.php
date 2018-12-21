<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * GET - List of all projects
     *
     * @return View
     */
    public function index(): View
    {
        $projects = Project::all();
        return view("projects.index", compact("projects"));
    }

    public function show(Project $project): View
    {
        return view("projects.show", compact("project"));
    }
}
