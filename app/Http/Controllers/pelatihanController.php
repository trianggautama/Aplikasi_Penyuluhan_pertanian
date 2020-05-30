<?php

namespace App\Http\Controllers;

use App\Pelatihan;
use Illuminate\Http\Request;

class pelatihanController extends Controller
{
    public function index()
    {
        $data = Pelatihan::orderBy('id', 'desc')->get();
        return view('admin.pelatihan.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new pelatihan;
        $data->nama_pelatihan = $request->nama_pelatihan;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_selesai = $request->tgl_selesai;
        $data->uraian = $request->uraian;

        $data->save();

        return redirect()->route('pelatihanIndex')->with('success', 'Data Berhasil Disimpan');
    }

    public function show($uuid)
    {
        $data = pelatihan::where('uuid', $uuid)->first();
        return view('admin.pelatihan.show', compact('data'));
    }

    public function edit($uuid)
    {
        $data = pelatihan::where('uuid', $uuid)->first();
        return view('admin.pelatihan.edit', compact('data'));
    }

    public function update(Request $request, $uuid)
    {
        $data = pelatihan::where('uuid', $uuid)->first();
        $data->nama_pelatihan = $request->nama_pelatihan;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_selesai = $request->tgl_selesai;
        $data->uraian = $request->uraian;

        $data->update();

        return redirect()->route('pelatihanIndex')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($uuid)
    {
        $pelatihan = pelatihan::where('uuid', $uuid)->first()->delete();

        return redirect()->route('pelatihanIndex')->with('success', 'Berhasil menghapus data');

    }
}
