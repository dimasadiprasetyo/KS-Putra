<?php

namespace App\Http\Controllers;

use App\Datamarketing;
use Illuminate\Http\Request;
use File;
class DatamarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datamarketings= Datamarketing::all();
        return view('datamarketing.index', compact('Datamarketings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datamarketings = Datamarketing::select('id', 'nomarketing')->get();
        return view('datamarketing.create', compact('datamarketings'));
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
        $request->filename->move(public_path('images-marketing'), $imgName);

        Datamarketing::create([
                'nomarketing'=>$request->nomarketing,
                'nama'=>$request->nama,
                'alamat'=>$request->alamat,
                'telepon'=>$request->telepon,
                'file'=>$imgName,
                'nik'=>$request->nik
            ]);
            return redirect(route('datamarketing.index'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Datamarketing  $datamarketing
     * @return \Illuminate\Http\Response
     */
    public function show(Datamarketing $datamarketing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Datamarketing  $datamarketing
     * @return \Illuminate\Http\Response
     */
    public function edit(Datamarketing $datamarketing)
    {
        return view('datamarketing.edit', compact('datamarketing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Datamarketing  $datamarketing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datamarketing $datamarketing)
    {
        $request->validate([
            'filename' =>'mimes:jpeg,png,jpg,gif,svg'
        ]);

        File::delete('images-marketing/' . $datamarketing->file);
        $imgName = $request->filename->getClientOriginalName(). '-'. time()
                                . '-'. $request->filename->extension();
        $request->filename->move(public_path('images-marketing'), $imgName);


        $datamarketing->update([
            'nomarketing'=>$request->nomarketing,
                'nama'=>$request->nama,
                'alamat'=>$request->alamat,
                'telepon'=>$request->telepon,
                'file'=>$imgName,
                'nik'=>$request->nik
            ]);
            return redirect(route('datamarketing.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Datamarketing  $datamarketing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datamarketing $datamarketing)
    {
        File::delete(public_path().'/images-marketing/' . $datamarketing->file);
        $datamarketing->delete();
        alert()->success('Berhasil!!','Data Telah Dihapus.');
        return redirect(route('datamarketing.index'));
    }
}
