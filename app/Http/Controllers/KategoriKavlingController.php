<?php

namespace App\Http\Controllers;

use App\Kategori_Kavling;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class KategoriKavlingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Kategories = Kategori_Kavling::all();
        return view('kategori.index', compact('Kategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategories = Kategori_Kavling::select('id', 'nama')->get();
        return view('kategori.create', compact('kategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama'=> 'required|max:20|min:10'
        ],[
            'nama.max'=>'Maks 20 Abjad',
            'nama.min'=>'Min 10 Abjad'
        ]);
        $kavling = $request->all();
        Kategori_Kavling::create($kavling);

        return redirect(route('kategori.index'));   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori_Kavling  $kategori_Kavling
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori_Kavling $kategori_Kavling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori_Kavling  $kategori_Kavling
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori_Kavling $kategori)
    {
        return view('kategori.edit', compact('kategori'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori_Kavling  $kategori_Kavling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori_Kavling $kategori)
    {
        $kavling = $request->all();
        $kategori->update($kavling);
        // $this->notification('success', 'Berhasil', 'Data Gejala Berhasil Diupdate');
        return redirect(route('kategori.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori_Kavling  $kategori_Kavling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori_Kavling $kategori)
    {
        $kategori->delete();
        alert()->success('Berhasil!!','Data Telah Dihapus.');
        return redirect(route('kategori.index')); 
    }
}
