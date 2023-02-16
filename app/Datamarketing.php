<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datamarketing extends Model
{
    protected $table ="datamarketings";
    
    protected $fillable = ['nomarketing','nama','alamat','telepon','nik','file','created_at','updated_at'];
    public function Penjualankavling()
    {
        return $this->hasMany('App\Penjualankavling');
    }
    public function Penjualantunai()
    {
        return $this->hasMany('App\Penjualantunai');
    }
}
