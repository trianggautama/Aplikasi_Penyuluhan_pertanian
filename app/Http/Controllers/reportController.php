<?php

namespace App\Http\Controllers;

use App\Evaluasi;
use PDF;
use App\Kecamatan;
use App\Modul;
use App\Pelatihan;
use Illuminate\Http\Request;

class reportController extends Controller
{
    public function kecamatanCetak()
    {
        $data         = Kecamatan::all();
        $pdf          = PDF::loadView('formCetak.dataKecamatan', ['data'=>$data]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Kecamatan.pdf');
    }

    public function evaluasiCetak()
    {
        $data         = Evaluasi::all();
        $pdf          = PDF::loadView('formCetak.formEvaluasi', ['data'=>$data]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Form Evaluasi.pdf');
    }

    public function pelatihanCetak()
    {
        $data         = Pelatihan::all();
        $pdf          = PDF::loadView('formCetak.dataPelatihan', ['data'=>$data]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Pelatihan.pdf');
    }

    public function detailPelatihanCetak($uuid)
    {
        $data         = Pelatihan::where('uuid',$uuid)->first();
        $pdf          = PDF::loadView('formCetak.detailPelatihan', ['data'=>$data]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Pelatihan.pdf');
    }

    public function modulCetak()
    {
        $data         = Modul::all();
        $pdf          = PDF::loadView('formCetak.dataModul', ['data'=>$data]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Modul.pdf');
    }
}
