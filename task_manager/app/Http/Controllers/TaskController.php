<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        return view('pages.index');
    }

    public function create()
    {
        return view('create');
    }

    public function update()
    {
        return view('update');
    }
}
