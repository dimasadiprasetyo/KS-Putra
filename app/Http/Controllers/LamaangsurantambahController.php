<?php

namespace App\Http\Controllers;

use App\Lamaangsuran;
use App\Lamaangsurantambah;
use App\Subkategori;
use Illuminate\Http\Request;

class LamaangsurantambahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lamaAngsuranTambah = Lamaangsurantambah::all();
        return view('lamaangsurantambah.create', compact('lamaAngsuranTambah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $lamaangsuran= Lamaangsuran::findOrfail($id);
        $subkategori = Subkategori::select('id', 'namasub')->get();
        $lamaAngsuranTambah = Lamaangsurantambah::with(['subkategori','lamaangsuran'])->get();
        return view('lamaangsurantambah.create', compact('lamaangsuran','subkategori','id','lamaAngsuranTambah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $kavling = $request->all();
        Lamaangsurantambah::create([
            'lamapembayaran' => $request->lamapembayaran,
            'subkategori_id' => $request->subkategori_id,
            'lamaangsuran_id' => $id
        ]);
        return redirect(route('lamaangsurantambah.create', $id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lamaangsurantambah  $lamaangsurantambah
     * @return \Illuminate\Http\Response
     */
    public function show(Lamaangsurantambah $lamaangsurantambah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lamaangsurantambah  $lamaangsurantambah
     * @return \Illuminate\Http\Response
     */
    public function edit(Lamaangsurantambah $lamaangsurantambah,$id)
    {
        $lamaangsuran= Lamaangsuran::findOrfail($id);
        $subkategori = Subkategori::select('id', 'namasub')->get();
        $lamaAngsuranTambah = Lamaangsurantambah::with(['subkategori','lamaangsuran'])->get();
        return view('lamaangsurantambah.edit', compact('lamaangsurantambah','lamaangsuran','subkategori','id','lamaAngsuranTambah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lamaangsurantambah  $lamaangsurantambah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lamaangsurantambah $lamaangsurantambah)
    {
        $kavling = $request->all();
        $lamaangsurantambah->update($kavling);
        // $this->notification('success', 'Berhasil', 'Data Gejala Berhasil Diupdate');
        return redirect(route('lamaangsurantambah.create'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lamaangsurantambah  $lamaangsurantambah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lamaangsurantambah $lamaangsurantambah)
    {
        $lamaangsurantambah->delete();
        alert()->success('Berhasil!!','Data Telah Dihapus.');
        return back()->withInput();
    }
}
