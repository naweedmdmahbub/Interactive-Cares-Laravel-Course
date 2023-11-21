<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = json_decode(Storage::get('data/projects.json'), true);
        // dd('hi', $projects);
        return view('projects', compact('projects'));
    }

    public function show($id)
    {
        $projects = json_decode(Storage::get('data/projects.json'), true);
        $filtered_array = array_values(array_filter($projects, function ($obj) use ($id) {
            return $obj['id'] == $id;
        }) );
        $project = !empty($filtered_array) ? $filtered_array[0] : null;
        // dd($projects, $filtered_array[0], $project);
        return view('project-details', compact('project'));
    }
}
