<?php

namespace App\Http\Controllers;

use App\Datakavling;
use App\Kategori_Kavling;
use App\Subkategori;
use Illuminate\Http\Request;

class DatakavlingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datakavlings = Datakavling::all();
        return view('Datakavling.index', compact('Datakavlings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $DatakavlingA = Kategori_Kavling::select('id', 'nama')->get();
        $datakavlingis = Subkategori::select('id', 'namasub')->get();
        return view('datakavling.create', compact('DatakavlingA', 'datakavlingis'));
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
        Datakavling::create($kavling);
        return redirect(route('datakavling.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Datakavling  $datakavling
     * @return \Illuminate\Http\Response
     */
    public function show(Datakavling $datakavling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Datakavling  $datakavling
     * @return \Illuminate\Http\Response
     */
    public function edit(Datakavling $datakavling)
    {
        $Datakavling = Kategori_Kavling::select('id', 'nama')->get();
        $datakavlingis = Subkategori::select('id', 'namasub')->get();
        return view('datakavling.edit', compact('datakavling','Datakavling', 'datakavlingis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Datakavling  $datakavling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datakavling $datakavling)
    {
        $kavling = $request->all();
        $datakavling->update($kavling);
        // $this->notification('success', 'Berhasil', 'Data Gejala Berhasil Diupdate');
        return redirect(route('datakavling.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Datakavling  $datakavling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datakavling $datakavling)
    {
        $datakavling->delete();
        alert()->success('Berhasil!!','Data Telah Dihapus.');
        return redirect(route('datakavling.index'));
    }
}
