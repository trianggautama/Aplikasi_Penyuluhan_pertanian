<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pelatihanController extends Controller
{
    public function index()
    {
        return view('admin.pelatihan.index');
    }

    public function show()
    {
        return view('admin.pelatihan.show');
    }

    public function edit()
    {
        return view('admin.pelatihan.edit');
    }
}
