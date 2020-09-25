<?php

namespace App\Http\Controllers;
use App\mahasiswa;
use Illuminate\Http\Request;

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
        $data = mahasiswan::where('id', $id)->first();

        return view('admin.mahasiswan.show', compact('data', 'bahan'));
    }

    public function edit($id)
    {
        $data = mahasiswan::where('id', $id)->first();

        return view('admin.mahasiswan.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $data = mahasiswan::where('id', $id)->first();

        $data->fill($req->all())->save();

        return redirect()->route('mahasiswanIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($id)
    {
        $data = mahasiswa::where('id', $id)->first()->delete();

        return redirect()->route('mahasiswaIndex')->withSuccess('Data berhasil dihapus');
    }
    //
}
