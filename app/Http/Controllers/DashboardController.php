<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', ['projects' => Project::all() ?? null]);
    }

    public function profile()
    {
        return view('dashboard.profile.profile');
    }

    public function project()
    {
        return view('dashboard.project.index', ['projects' => Project::all() ?? null]);
    }
}
