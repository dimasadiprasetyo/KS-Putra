<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lamaangsuran extends Model
{
    protected $fillable = ['kategori_id','metodepembayaran_id','created_at','updated_at'];
    public function Kategori()
    {

        return $this->belongsTo('App\Kategori_Kavling');
}
    public function Metodepembayaran()
    {

        return $this->belongsTo('App\Metodepembayaran');
}
   
public function lamaangsurantambah()
{

        return $this->hasMany('App\Lamaangsurantambah');
}
}
