<?php

namespace App\Http\Controllers;

use App\Penjualantunai;
use App\Tunai;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class TunaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tunai= Tunai::where('penjualantunai_id',$id)->get();
        // dd($tunai);
        $infopembeli = Penjualantunai::where('id','=', $id)->first();
        // dd($infopembeli);
        
        $sql = Tunai::with(['penjualantunai'=> function($query){
            $query->with('datakavling');
        }])->where('penjualantunai_id','=',$id)->first();
        // dd($angsuran);
        if($sql != null){
        $cash = $sql->penjualantunai->bayar;
        $hargacash = ($sql->penjualantunai->datakavling->hargacash - $cash);
        } else{
            $sql = Penjualantunai::with('datakavling')->where('id','=',$id)->first();
            $cash = $sql->bayar;
            $hargacash = ($sql->datakavling->hargacash - $cash);
        }
        return view('tunai.index', compact('tunai','infopembeli','id','hargacash', 'cash'));
    }   
    

    public function kwitansi($id)
    {
        $tunai= Tunai::where('penjualantunai_id',$id)->get();
        // dd($tunai);
        $infopembeli = Penjualantunai::where('id','=', $id)->first();
        $tunais = Tunai::where('id','=', $id)->first();
        
        $sql = Tunai::with(['penjualantunai'=> function($query){
            $query->with('datakavling');
        }])->where('penjualantunai_id','=',$id)->first();
        // dd($angsuran);
        if($sql != null){
        $cash = $sql->penjualantunai->bayar;
        $hargacash = ($sql->penjualantunai->datakavling->hargacash - $cash);
        } else{
            $sql = Penjualantunai::with('datakavling')->where('id','=',$id)->first();
            $cash = $sql->bayar;
            $hargacash = ($sql->datakavling->hargacash - $cash);
        }
        $pdf = PDF::loadview('tunai.kwitansi',compact('tunai','tunais','infopembeli','id','hargacash', 'cash'))->setpaper('A4', 'potrait');
        return $pdf->stream();
    } 
    
    public function cetak($id)
    {
        $tunai= Tunai::where('penjualantunai_id',$id)->get();
        // dd($tunai);
        $infopembeli = Penjualantunai::where('id','=', $id)->first();
        $tunais = Tunai::where('id','=', $id)->first();
        
        $sql = Tunai::with(['penjualantunai'=> function($query){
            $query->with('datakavling');
        }])->where('penjualantunai_id','=',$id)->first();
        // dd($angsuran);
        if($sql != null){
        $cash = $sql->penjualantunai->bayar;
        $hargacash = ($sql->penjualantunai->datakavling->hargacash - $cash);
        } else{
            $sql = Penjualantunai::with('datakavling')->where('id','=',$id)->first();
            $cash = $sql->bayar;
            $hargacash = ($sql->datakavling->hargacash - $cash);
        }
        $pdf = PDF::loadview('tunai.cetak',compact('tunai','tunais','infopembeli','id','hargacash', 'cash'))->setpaper('A4', 'potrait');
        return $pdf->stream();
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $penjualantunai= Penjualantunai::findOrfail($id);
        return view('tunai.create', compact('penjualantunai', 'id')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        Tunai::create([
            'penjualantunai_id'=>$id,
            'tanggal'=>$request->tanggal,
            'pembayarantunai'=>$request->pembayarantunai
        ]);
        return redirect(route('tunai.index',$id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tunai  $tunai
     * @return \Illuminate\Http\Response
     */
    public function show(Tunai $tunai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tunai  $tunai
     * @return \Illuminate\Http\Response
     */
    public function edit(Tunai $tunai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tunai  $tunai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tunai $tunai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tunai  $tunai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tunai $tunai)
    {
        //
    }
}
