<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penanamanController extends Controller
{
    public function index()
    {
        
        return view('admin.penanaman.index');
    }

    public function edit()
    {
        
        return view('admin.penanaman.edit');
    }

    public function show()
    {
        
        return view('admin.penanaman.show');
    }
}
