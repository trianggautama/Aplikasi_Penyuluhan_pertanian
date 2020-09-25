<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use Illuminate\Http\Request;
use App\mahasiswa;
use PDF;
=======
use App\mahasiswa;
use Illuminate\Http\Request;

>>>>>>> 1bb981b9f5176c80e445f8ea875b54d416062f17
class mahasiswaController extends Controller
{
    public function index()
    {
        $data = mahasiswa::orderBy('id', 'desc')->get();
        return view('admin.mahasiswa.index', compact('data'));
    }

    public function store(Request $req)
    {
        $data = mahasiswa::create($req->all());

        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function show($id)
    {
<<<<<<< HEAD
        $data = mahasiswa::where('id', $id)->first();

        return view('admin.mahasiswa.show', compact('data', 'bahan'));
=======
        $data = mahasiswan::where('id', $id)->first();

        return view('admin.mahasiswan.show', compact('data', 'bahan'));
>>>>>>> 1bb981b9f5176c80e445f8ea875b54d416062f17
    }

    public function edit($id)
    {
<<<<<<< HEAD
        $data = mahasiswa::where('id', $id)->first();

        return view('admin.mahasiswa.edit', compact('data'));
=======
        $data = mahasiswan::where('id', $id)->first();

        return view('admin.mahasiswan.edit', compact('data'));
>>>>>>> 1bb981b9f5176c80e445f8ea875b54d416062f17
    }

    public function update(Request $req, $id)
    {
<<<<<<< HEAD
        $data = mahasiswa::where('id', $id)->first();

        $data->fill($req->all())->save();

        return redirect()->route('mahasiswaIndex')->withSuccess('Data berhasil diubah');
=======
        $data = mahasiswan::where('id', $id)->first();

        $data->fill($req->all())->save();

        return redirect()->route('mahasiswanIndex')->withSuccess('Data berhasil diubah');
>>>>>>> 1bb981b9f5176c80e445f8ea875b54d416062f17
    }

    public function destroy($id)
    {
        $data = mahasiswa::where('id', $id)->first()->delete();

        return redirect()->route('mahasiswaIndex')->withSuccess('Data berhasil dihapus');
    }
<<<<<<< HEAD

    public function cetak()
    {
        $data         = mahasiswa::all();
        $pdf          = PDF::loadView('formCetak.datamahasiswa', ['data'=>$data]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data mahasiswa.pdf');
    }
=======
    //
>>>>>>> 1bb981b9f5176c80e445f8ea875b54d416062f17
}
