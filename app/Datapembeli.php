<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapembeli extends Model
{
    protected $table ="datapembelis";
    
    protected $fillable = ['nopembeli','namapembeli','alamat','telepon','nik','file','created_at','updated_at'];

    public function Penjualankavling()
    {
        return $this->hasMany('App\Penjualankavling');
    }
}
