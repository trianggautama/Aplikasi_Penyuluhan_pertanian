<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lahanController extends Controller
{
    public function index()
    {
        
        return view('admin.lahan.index');
    }

    public function edit()
    {
        
        return view('admin.lahan.edit');
    }

    public function show()
    {
        
        return view('admin.lahan.show');
    }
}
