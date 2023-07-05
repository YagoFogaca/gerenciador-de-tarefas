<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Controller para views

    public function index()
    {
        return view('home');
    }

    public function update()
    {
        return view('update');
    }
}
