<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kecamatanController extends Controller
{
    public function index()
    {
        return view('admin.kecamatan.index');
    }

    public function edit()
    {
        return view('admin.kecamatan.edit');
    }
}
