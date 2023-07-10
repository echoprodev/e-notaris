<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permohonan;
use PDF;

class CetakController extends Controller
{
    public function cetak()
    {
        $permohonan = Permohonan::where('status', 'Disetujui')->get();

        $html = view(
            'admin.permohonan.cetak',
            [
                'permohonan' => $permohonan,
            ]
        );

        $pdf = PDF::loadview(
            'admin.permohonan.cetak',
            [
                'permohonan' => $permohonan,
            ]
        );

        return $pdf->stream();
    }
}
