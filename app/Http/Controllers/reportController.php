<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class reportController extends Controller
{
    public function kecamatanCetak()
    {
        $data         = null;
        $pdf          = PDF::loadView('formCetak.dataKecamatan', ['data'=>$data]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Kecamatan.pdf');
    }

    public function evaluasiCetak()
    {
        $data         = null;
        $pdf          = PDF::loadView('formCetak.formEvaluasi', ['data'=>$data]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Form Evaluasi.pdf');
    }

    public function pelatihanCetak()
    {
        $data         = null;
        $pdf          = PDF::loadView('formCetak.dataPelatihan', ['data'=>$data]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Pelatihan.pdf');
    }

    public function detailPelatihanCetak()
    {
        $data         = null;
        $pdf          = PDF::loadView('formCetak.detailPelatihan', ['data'=>$data]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Data Pelatihan.pdf');
    }
}
