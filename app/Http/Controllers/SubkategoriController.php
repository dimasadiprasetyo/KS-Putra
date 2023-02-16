<?php

namespace App\Http\Controllers;

use App\Kategori_Kavling;
use App\Subkategori;
use Illuminate\Http\Request;

class SubkategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Subkategories = Subkategori::all();
        return view('subkategori.index', compact('Subkategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subkategories = Kategori_Kavling::select('id', 'nama')->get();
        return view('subkategori.create', compact('subkategories'));
        
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
        Subkategori::create($kavling);
        return redirect(route('subkategori.index'));   

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subkategori  $subkategori
     * @return \Illuminate\Http\Response
     */
    public function show(Subkategori $subkategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subkategori  $subkategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Subkategori $subkategori)
    {
        $subkategories = Kategori_Kavling::select('id', 'nama')->get();
        return view('subkategori.edit', compact('subkategori','subkategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subkategori  $subkategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subkategori $subkategori)
    {
        $kavling = $request->all();
        $subkategori->update($kavling);
        // $this->notification('success', 'Berhasil', 'Data Gejala Berhasil Diupdate');
        return redirect(route('subkategori.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subkategori  $subkategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subkategori $subkategori)
    {
        $subkategori->delete();
        alert()->success('Berhasil!!','Data Telah Dihapus.');
        return redirect(route('subkategori.index'));
    }
}
