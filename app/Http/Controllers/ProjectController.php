<?php

namespace App\Http\Controllers;

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
        $projects = Project::orderBy("title")->get();

        return view("projects.index", compact("projects"));
    }

    /**
     * GET - Show a specific project
     *
     * @param Project $project
     * @return View
     */
    public function show(Project $project): View
    {
        return view("projects.show", compact("project"));
    }
}
