<?php

namespace App\Http\Controllers;

use App\Datapimpinan;
use Illuminate\Http\Request;
use alert;
class DatapimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datapimpinans = Datapimpinan::all();
        return view('datapimpinan.index', compact('Datapimpinans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapimpinans = Datapimpinan::select('id', 'idpimpinan')->get();
        return view('datapimpinan.create', compact('datapimpinans'));
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
        Datapimpinan::create($kavling);
        return redirect(route('datapimpinan.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Datapimpinan  $datapimpinan
     * @return \Illuminate\Http\Response
     */
    public function show(Datapimpinan $datapimpinan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Datapimpinan  $datapimpinan
     * @return \Illuminate\Http\Response
     */
    public function edit(Datapimpinan $datapimpinan)
    {
        $datapimpinans = Datapimpinan::select('id', 'idpimpinan')->get();
        return view('datapimpinan.edit', compact('datapimpinan','datapimpinans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Datapimpinan  $datapimpinan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datapimpinan $datapimpinan)
    {
        $kavling = $request->all();
        $datapimpinan->update($kavling);
        return redirect(route('datapimpinan.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Datapimpinan  $datapimpinan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datapimpinan $datapimpinan)
    {
        $datapimpinan->delete();
        alert()->success('Berhasil!!','Data Telah Dihapus');
        return redirect(route('datapimpinan.index')); 
    }
}
