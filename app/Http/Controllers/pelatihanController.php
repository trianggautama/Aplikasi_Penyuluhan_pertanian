<?php

namespace App\Http\Controllers;

use App\Modul;
use App\Modul_pelatihan;
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
        $modul = Modul::orderBy('id', 'Desc')->get();
        $modul_pelatihan = Modul_pelatihan::where('pelatihan_id', $data->id)->orderBy('id', 'desc')->get();
        return view('admin.pelatihan.show', compact('data', 'modul', 'modul_pelatihan'));
    }

    public function addModul(Request $request)
    {
        $pelatihan = Pelatihan::findOrfail($request->pelatihan_id);
        $data = new Modul_pelatihan;
        $data->pelatihan_id = $request->pelatihan_id;
        $data->modul_id = $request->modul_id;

        $data->save();

        return redirect()->back()->with('success', 'Data Berhasil Disimpan');

    }

    public function destroyModul($uuid)
    {
        $pelatihan = Modul_pelatihan::where('uuid', $uuid)->first()->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data');

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
