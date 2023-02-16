<?php

namespace App\Http\Controllers;

use App\Penjualantunai;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class LaporantunaiController extends Controller
{
    public function index(){
        $penjualantunais = Penjualantunai::all();
        $pdf = PDF::loadview('laporantunai.index',compact('penjualantunais'));
    	return $pdf->download('laporan-pegawai-pdf');
        return view('laporantunai.index' ,compact('penjualantunais'));
    }
}
