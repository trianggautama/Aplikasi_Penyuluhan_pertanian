<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bahanController extends Controller
{
    public function index()
    {
        
        return view('admin.bahan.index');
    }

    public function edit()
    {
        
        return view('admin.bahan.edit');
    }
}
