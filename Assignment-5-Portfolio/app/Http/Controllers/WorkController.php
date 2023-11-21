<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    public function index()
    {
        $works = json_decode(Storage::get('data/works.json'), true);
        return view('works', compact('works'));
    }

    public function store()
    {

    }
}
