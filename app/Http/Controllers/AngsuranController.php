<?php

namespace App\Http\Controllers;


use App\Angsuran;
use App\Exports\AngsuranExport;
use App\Penjualankavling;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AngsuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $angsuran= Angsuran::where('penjualankavling_id',$id)->get();
        $infopembeli = Penjualankavling::where('id','=', $id)->first();
        // dd($infopembeli);
        
        $sql = Angsuran::with(['penjualankavling'=> function($query){
            $query->with('datakavling');}])->where('penjualankavling_id','=',$id)->first();
        // dd($angsuran);
        if($sql != null){
        $dp = $sql->penjualankavling->dp;
        $hargacash = ($sql->penjualankavling->datakavling->hargacash - $dp);
        } else{
            $sql = Penjualankavling::with('datakavling')->where('id','=',$id)->first();
            $dp = $sql->dp;
            // $hargacash = ($sql->datakavling->hargacash - $dp);
        }
        return view('angsuran.index', compact('angsuran','infopembeli','id', 'dp'));
    }


    
   
    public function cetak($id)
    {
        $angsuran= Angsuran::where('penjualankavling_id',$id)->get();
        $infopembeli = Penjualankavling::where('id','=', $id)->first();
        $sql = Angsuran::with(['penjualankavling'=> function($query){
        $query->with('datakavling');
        }])->where('penjualankavling_id','=',$id)->first();
        if($sql != null){
        $dp = $sql->penjualankavling->dp;
        $hargacash = ($sql->penjualankavling->datakavling->hargacash - $dp);
        } else{
            $sql = Penjualankavling::with('datakavling')->where('id','=',$id)->first();
            $dp = $sql->dp;
            $hargacash = ($sql->datakavling->hargacash - $dp);
        }
        $pdf = PDF::loadview('angsuran.cetak',compact('angsuran','infopembeli','id','hargacash', 'dp'));
        return $pdf->stream();
    }

    
    public function kwitansi($id)
    {
        $angsuran= Angsuran::where('penjualankavling_id',$id)->get();
        
        $infopembeli = Penjualankavling::where('id','=', $id)->first();
        $angsurans = Angsuran::where('id','=', $id)->first();
        $sql = Angsuran::with(['penjualankavling'=> function($query){
        $query->with('datakavling');
        }])->where('penjualankavling_id','=',$id)->first();
        if($sql != null){
        $dp = $sql->penjualankavling->dp;
        $hargacash = ($sql->penjualankavling->datakavling->hargacash - $dp);
        } else{
            $sql = Penjualankavling::with('datakavling')->where('id','=',$id)->first();
            $dp = $sql->dp;
            $hargacash = ($sql->datakavling->hargacash - $dp);
        }
        $pdf = PDF::loadview('angsuran.kwitansi',compact('angsuran','angsurans','infopembeli','id','hargacash', 'dp'))->setpaper('A4', 'potrait');
        return $pdf->stream();
    }

    public function exportExcel()
    {
        return Excel::download(new AngsuranExport, 'angsuran.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $penjualankavling= Penjualankavling::findOrfail($id);
        return view('angsuran.create', compact('penjualankavling', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        Angsuran::create([
            'penjualankavling_id'=>$id,
            'tanggal'=>$request->tanggal,
            'angsuran'=>$request->angsuran,
            'bayarangsuran'=>$request->bayarangsuran
        ]);
        return redirect(route('angsuran.index',$id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Angsuran  $angsuran
     * @return \Illuminate\Http\Response
     */
    public function show(Angsuran $angsuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Angsuran  $angsuran
     * @return \Illuminate\Http\Response
     */
    public function edit(Angsuran $angsuran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Angsuran  $angsuran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Angsuran $angsuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Angsuran  $angsuran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Angsuran $angsuran)
    {
        //
    }
}
