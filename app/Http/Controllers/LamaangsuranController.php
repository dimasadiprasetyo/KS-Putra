<?php

namespace App\Http\Controllers;

use App\Lamaangsuran;
use Illuminate\Http\Request;
use App\Kategori_Kavling;
use App\metodepembayaran;
class LamaangsuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Lamaangsurans = Lamaangsuran::all();
        return view('lamaangsuran.index', compact('Lamaangsurans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lamaangsurane = Kategori_Kavling::select('id', 'nama')->get();
        $lamaAngsuran = metodepembayaran::select('id', 'pembayaran')->get();
        $Lamaangsuransi= Lamaangsuran::all();
        return view('lamaangsuran.create', compact('lamaangsurane','lamaAngsuran', 'Lamaangsuransi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kavling = $request->all();
        Lamaangsuran::create($kavling);
        return redirect(route('lamaangsuran.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lamaangsuran  $lamaangsuran
     * @return \Illuminate\Http\Response
     */
    public function show(Lamaangsuran $lamaangsuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lamaangsuran  $lamaangsuran
     * @return \Illuminate\Http\Response
     */
    public function edit(Lamaangsuran $lamaangsuran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lamaangsuran  $lamaangsuran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lamaangsuran $lamaangsuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lamaangsuran  $lamaangsuran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lamaangsuran $lamaangsuran)
    {
        $lamaangsuran->delete();
        
        alert()->success('Berhasil!!','Data Telah Dihapus.');
        return redirect(route('lamaangsuran.index')); 
    }
}
