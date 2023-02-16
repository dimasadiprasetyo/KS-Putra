<?php

namespace App\Http\Controllers;

use App\Datakavling;
use App\Datamarketing;
use App\Datapembeli;
use App\Kategori_Kavling;
use App\metodepembayaran;
use App\Penjualantunai;
use App\Subkategori;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class PenjualantunaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $penjualantunais = Penjualantunai::all();
        // dd($Penjualankavlings);
        return view('penjualantunai.index', compact('penjualantunais'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tunai1 = Kategori_Kavling::select('id', 'nama')->get();
        $tunai2 = Subkategori::select('id', 'namasub')->get();
        $tunai3 = Datakavling::select('id', 'cluster', 'nomorkavling', 'hargacash')->get();
        $tunai4 = Datapembeli::select('id', 'nopembeli','namapembeli')->get();
        $tunai5 = Datamarketing::select('id', 'nomarketing','nama')->get();
        $tunai6 = metodepembayaran::select('id', 'pembayaran')->get();

        return view('penjualantunai.create', compact('tunai1', 'tunai2','tunai3','tunai4','tunai5','tunai6'));
    }
    // public function kwitansi()
    // {
    //     $tunai1 = Kategori_Kavling::select('id', 'nama')->get();
    //     $tunai2 = Subkategori::select('id', 'namasub')->get();
    //     $tunai3 = Datakavling::select('id', 'cluster')->get();
    //     $tunai4 = Datapembeli::select('id', 'nopembeli','namapembeli')->get();
    //     $tunai5 = Datamarketing::select('id', 'nomarketing','nama')->get();
    //     $tunai6 = metodepembayaran::select('id', 'pembayaran')->get();
    //     $pdf = PDF::loadview('penjualantunai.kwitansi',compact('tunai1', 'tunai2','tunai3','tunai4','tunai5','tunai6'));
    //     return $pdf->stream();
    // }

    // public function cetak()
    // {
    //     $tunai1 = Kategori_Kavling::select('id', 'nama')->get();
    //     $tunai2 = Subkategori::select('id', 'namasub')->get();
    //     $tunai3 = Datakavling::select('id', 'cluster')->get();
    //     $tunai4 = Datapembeli::select('id', 'nopembeli','namapembeli')->get();
    //     $tunai5 = Datamarketing::select('id', 'nomarketing','nama')->get();
    //     $tunai6 = metodepembayaran::select('id', 'pembayaran')->get();
    //     $pdf = PDF::loadview('penjualantunai.cetak',compact('tunai1', 'tunai2','tunai3','tunai4','tunai5','tunai6'));
    //     return $pdf->stream();
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kavling =array(

            'kategori_id'           => $request->input('kategori_id'),
            'subkategori_id'        => $request->input('subkategori_id'),
            'datakavling_id'        => $request->input('datakavling_id'),
            'datapembeli_id'        => $request->input('datapembeli_id'),
            'datamarketing_id'      => $request->input('datamarketing_id'),
            'metodepembayaran_id'   => $request->input('metodepembayaran_id'),
            'promo'                 => $request->input('promo'),
            'bayar'                 => $request->input('bayar'),
            'tertanggal'            => $request->post('tertanggal')

    );
        Penjualantunai::create($kavling);
        
        return redirect(route('penjualantunai.index'));   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penjualantunai  $penjualantunai
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualantunai $penjualantunai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penjualantunai  $penjualantunai
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualantunai $penjualantunai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penjualantunai  $penjualantunai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualantunai $penjualantunai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penjualantunai  $penjualantunai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualantunai $penjualantunai)
    {
        //
    }
}
