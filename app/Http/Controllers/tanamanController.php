<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tanamanController extends Controller
{
    public function index()
    {
        
        return view('admin.tanaman.index');
    }

    public function edit()
    {
        
        return view('admin.tanaman.edit');
    }
}
