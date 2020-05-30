<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function index()
    {
        return view('admin.berita.index');
    }

    public function show()
    {
        return view('admin.berita.show');
    }

    public function edit()
    {
        return view('admin.berita.edit');
    }
}
