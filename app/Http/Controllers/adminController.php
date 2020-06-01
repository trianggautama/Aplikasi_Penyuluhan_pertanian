<?php

namespace App\Http\Controllers;

use App\Pelatihan;
use App\Berita;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function depan()
    {
        $berita = Berita::all();
        return view('welcome',compact('berita'));
    }
    public function index()
    {
        return view('admin.index');
    }

    public function userIndex()
    {
        $pelatihan = Pelatihan::all();
        return view('user.index',compact('pelatihan'));
    }
}
