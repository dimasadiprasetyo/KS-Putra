<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datakavling extends Model
{
    protected $fillable = ['cluster','created_at','hargaangsuran','hargacash','kategori_id','luaskavling','nomorkavling','nopbb','subkategori_id','tipekavling','ukurantanah','updated_at'];
    
    public function Kategori()
    {

        return $this->belongsTo('App\Kategori_Kavling');
}

    public function Subkategori()
    {

        return $this->belongsTo('App\Subkategori');
}
    public function Penjualankavling()
    {
        return $this->hasMany('App\Penjualankavling');
    }
    public function Penjualantunai()
    {
        return $this->hasMany('App\Penjualantunai');
    }
}
