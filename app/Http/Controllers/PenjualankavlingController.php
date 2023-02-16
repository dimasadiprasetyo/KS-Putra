<?php

namespace App\Http\Controllers;

use App\Penjualankavling;
use App\Kategori_Kavling;
use App\Subkategori;
use App\Datakavling;
use App\Datapembeli;
use App\Datamarketing;
use App\metodepembayaran;
use Alert;
use App\Lamaangsurantambah;
use Illuminate\Http\Request;

class PenjualankavlingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $penjualankavlings = Penjualankavling::with('lamaangsurantambah')->get();
        return view('penjualankavling.index', compact('penjualankavlings'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Penjualankavlings1 = Kategori_Kavling::select('id', 'nama')->get();
        $Penjualankavlings2 = Subkategori::select('id', 'namasub')->get();
        $Penjualankavlings3 = Datakavling::select('id', 'cluster','nomorkavling')->get();
        $Penjualankavlings4 = Datapembeli::select('id', 'nopembeli','namapembeli')->get();
        $Penjualankavlings7 = Datamarketing::select('id', 'nomarketing','nama')->get();
        $Penjualankavlings5 = metodepembayaran::select('id', 'pembayaran')->get();
        $Penjualankavlings6 = Lamaangsurantambah::select('id', 'lamapembayaran', 'subkategori_id')->get();

        return view('penjualankavling.create', compact('Penjualankavlings1', 'Penjualankavlings2','Penjualankavlings3','Penjualankavlings4','Penjualankavlings5','Penjualankavlings6','Penjualankavlings7'));
    }

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
            'lamaangsurantambah_id' => $request->input('lamaangsurantambah_id'),
            'tanggal'               => $request->input('tanggal'),
            'promo'                 => $request->input('promo'),
            'dp'                    => $request->input('dp'),
            'bayar'                 => $request->input('bayar'),
            'tertanggal'            => $request->post('tertanggal')

    );
        Penjualankavling::create($kavling);
        
        return redirect(route('penjualankavling.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penjualankavling  $penjualankavling
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualankavling $penjualankavling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penjualankavling  $penjualankavling
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualankavling $penjualankavling)
    {
        $Penjualankavlings1 = Kategori_Kavling::select('id', 'nama')->get();
        $Penjualankavlings2 = Subkategori::select('id', 'namasub')->get();
        $Penjualankavlings3 = Datakavling::select('id', 'cluster')->get();
        $Penjualankavlings4 = Datapembeli::select('id', 'nopembeli','namapembeli')->get();
        $Penjualankavlings7 = Datamarketing::select('id', 'nomarketing','nama')->get();
        $Penjualankavlings5 = metodepembayaran::select('id', 'pembayaran')->get();
        $Penjualankavlings6 = Lamaangsurantambah::select('id', 'lamapembayaran', 'subkategori_id')->get();

        return view('penjualankavling.edit', compact('penjualankavling','Penjualankavlings1', 'Penjualankavlings2','Penjualankavlings3','Penjualankavlings4','Penjualankavlings5','Penjualankavlings6','Penjualankavlings7'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penjualankavling  $penjualankavling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualankavling $penjualankavling)
    {
        $kavling = $request->all();
        $penjualankavling->update($kavling);
        // $this->notification('success', 'Berhasil', 'Data Gejala Berhasil Diupdate');
        return redirect(route('penjualankavling.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penjualankavling  $penjualankavling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualankavling $penjualankavling)
    {
        $penjualankavling->delete();
        alert()->success('Berhasil!!','Data Telah Dihapus.');
        return redirect(route('penjualankavling.index')); 
    }
}
