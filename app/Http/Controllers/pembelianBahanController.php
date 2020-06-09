<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pembelianBahanController extends Controller
{
    public function index()
    {
        
        return view('admin.pembelianBahan.index');
    }

    public function edit()
    {
        
        return view('admin.pembelianBahan.edit');
    }
}
