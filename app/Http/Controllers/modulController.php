<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modulController extends Controller
{
    public function index()
    {
        return view('admin.modul.index');
    }

    public function show()
    {
        return view('admin.modul.show');
    }

    public function edit()
    {
        return view('admin.modul.edit');
    }
}