<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Product;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function exportPDF()
{
    $gurus = Guru::all();
    $siswas = Siswa::all();
    $products = Product::all();

    $pdf = PDF::loadView('pdf.laporan-lengkap', [
        'gurus' => $gurus,
        'siswas' => $siswas,
        'products' => $products
    ]);

    return $pdf->stream('laporan.pdf');
}
}