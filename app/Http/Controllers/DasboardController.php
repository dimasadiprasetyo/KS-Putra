<?php

namespace App\Http\Controllers;

use App\Dasboard;
use App\Datapembeli;
use App\Penjualankavling;
use App\Penjualantunai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DasboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Dasboards = Dasboard::all();
        $Dasboard1 = DB::table('datapembelis')->count();
        $Dasboard2 = DB::table('penjualankavlings')->count();
        $Dasboard3 = DB::table('penjualantunais')->count();



        return view('dasboard.index', compact('Dasboards', 'Dasboard1', 'Dasboard2',  'Dasboard3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dasboard  $dasboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dasboard $dasboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dasboard  $dasboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dasboard $dasboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dasboard  $dasboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dasboard $dasboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dasboard  $dasboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dasboard $dasboard)
    {
        //
    }
}
