<?php

namespace App\Http\Controllers;

use App\Kecamatan;
use App\Pelatihan;
use Illuminate\Http\Request;

class pesertaController extends Controller
{
    public function index(){
        $kecamatan = Kecamatan::latest()->get();
        return view('admin.peserta.index',compact('kecamatan'));
    }

    public function filter(){
        $pelatihan = Pelatihan::latest()->get();
        return view('admin.peserta.filter',compact('pelatihan'));
    }

    public function edit($uuid){
        $kecamatan = Kecamatan::latest()->get();
        return view('admin.peserta.edit',compact('kecamatan'));
    }
}
