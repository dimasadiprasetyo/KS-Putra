<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class metodepembayaran extends Model
{
    protected $fillable = ['pembayaran','updated_at','created_at'];
    
    public function Lamaangsurans()
    {
        return $this->hasMany('App\Lamaangsuran');
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