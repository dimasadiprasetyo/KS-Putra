<?php

namespace App\Http\Controllers;

use App\metodepembayaran;
use Illuminate\Http\Request;

class MetodepembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Metodepembayarane = Metodepembayaran::all();
        return view('metodepembayaran.index', compact('Metodepembayarane'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Metodepembayarane = Metodepembayaran::select('id', 'pembayaran')->get();
        return view('metodepembayaran.create', compact('Metodepembayarane'));
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
        Metodepembayaran::create($kavling);
        return redirect(route('metodepembayaran.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\metodepembayaran  $metodepembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(metodepembayaran $metodepembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\metodepembayaran  $metodepembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(metodepembayaran $metodepembayaran)
    {
        return view('metodepembayaran.edit', compact('metodepembayaran'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\metodepembayaran  $metodepembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, metodepembayaran $metodepembayaran)
    {
        $kavling = $request->all();
        $metodepembayaran->update($kavling);
        // $this->notification('success', 'Berhasil', 'Data Gejala Berhasil Diupdate');
        return redirect(route('metodepembayaran.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\metodepembayaran  $metodepembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(metodepembayaran $metodepembayaran)
    {
        $metodepembayaran->delete();
        alert()->success('Berhasil!!','Data Telah Dihapus.');
        return redirect(route('metodepembayaran.index')); 
    }
}
