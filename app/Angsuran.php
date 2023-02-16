<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    protected $fillable = ['penjualankavling_id','created_at','tanggal','angsuran','bayarangsuran','updated_at'];

    public function penjualankavling()
    {

        return $this->belongsTo('App\Penjualankavling', 'penjualankavling_id');
    }
    

}
