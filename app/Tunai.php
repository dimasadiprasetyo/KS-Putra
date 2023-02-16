<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tunai extends Model
{
    protected $fillable = ['penjualantunai_id','created_at','tanggal','pembayarantunai','bayartunai','updated_at'];

    public function penjualantunai()
    {

        return $this->belongsTo('App\Penjualantunai', 'penjualantunai_id');
    }
}
