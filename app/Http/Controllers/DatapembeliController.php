<?php

namespace App\Http\Controllers;

use App\Datapembeli;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;
use File;

class DatapembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datapembelis= Datapembeli::all();
        return view('datapembeli.index', compact('Datapembelis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapembelis = Datapembeli::select('id', 'nopembeli')->get();
        return view('datapembeli.create', compact('datapembelis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'filename' =>'mimes:jpeg,png,jpg,gif,svg'
        ]);

        $imgName = $request->filename->getClientOriginalName(). '-'. time()
                                . '-'. $request->filename->extension();
        $request->filename->move(public_path('images'), $imgName);

        Datapembeli::create([
                'nopembeli'=>$request->nopembeli,
                'namapembeli'=>$request->namapembeli,
                'alamat'=>$request->alamat,
                'telepon'=>$request->telepon,
                'file'=>$imgName,
                'nik'=>$request->nik
            ]);
            return redirect(route('datapembeli.index'));
        
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Datapembeli  $datapembeli
     * @
     * return \Illuminate\Http\Response
     */
    public function show(Datapembeli $datapembeli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Datapembeli  $datapembeli
     * @return \Illuminate\Http\Response
     */
    public function edit(Datapembeli $datapembeli)
    {
        // dd($datapembeli);
        // $datapembelis = Datapembeli::select('id', 'idpembeli')->get();
        return view('datapembeli.edit', compact('datapembeli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Datapembeli  $datapembeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datapembeli $datapembeli)
    {
        $request->validate([
            'filename' =>'mimes:jpeg,png,jpg,gif,svg'
        ]);

        File::delete('images/' . $datapembeli->file);
        $imgName = $request->filename->getClientOriginalName(). '-'. time()
                                . '-'. $request->filename->extension();
        $request->filename->move(public_path('images'), $imgName);


        $datapembeli->update([
            'nopembeli'=>$request->nopembeli,
                'namapembeli'=>$request->namapembeli,
                'alamat'=>$request->alamat,
                'telepon'=>$request->telepon,
                'file'=>$imgName,
                'nik'=>$request->nik
            ]);
            return redirect(route('datapembeli.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Datapembeli  $datapembeli
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datapembeli $datapembeli)
    {
        File::delete(public_path().'/images/' . $datapembeli->file);
        $datapembeli->delete();
        alert()->success('Berhasil!!','Data Telah Dihapus.');
        return redirect(route('datapembeli.index'));
    }
}
