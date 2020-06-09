<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class panenController extends Controller
{
    public function index()
    {
        
        return view('admin.panen.index');
    }

    public function edit()
    {
        
        return view('admin.panen.edit');
    }

    public function show()
    {
        
        return view('admin.panen.show');
    }
}
