<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lamaangsurantambah extends Model
{
    protected $fillable = ['lamapembayaran','subkategori_id','lamaangsuran_id','updated_at','created_at'];
    // public function lamaangsuran()
    // {

    //     return $this->belongsTo('App\Lamaangsuran', 'lamaangsuran_id');
    // }
public function subkategori()
    {
        return $this->belongsTo('App\Subkategori','subkategori_id');
    }

    public function lamaangsuran()
    {
        return $this->belongsTo('App\Lamaangsuran', 'lamaangsuran_id');
    }
    public function Penjualankavling()
    {
    
            return $this->hasMany('App\Penjualankavling');
    }
}
