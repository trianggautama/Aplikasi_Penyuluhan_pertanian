<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penjualanController extends Controller
{
    public function index()
    {
        
        return view('admin.penjualan.index');
    }

    public function edit()
    {
        
        return view('admin.penjualan.edit');
    }

    public function show()
    {
        
        return view('admin.penjualan.show');
    }
}
