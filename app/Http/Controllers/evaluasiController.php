<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class evaluasiController extends Controller
{
    public function index()
    {
        return view('admin.evaluasi.index');
    }

    public function edit()
    {
        return view('admin.evaluasi.edit');
    }
}
