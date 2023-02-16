<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    protected $fillable = ['namasub','kategori_id'];

    public function Kategori()
    {
        return $this->belongsTo('App\Kategori_Kavling', 'kategori_id');
}
 
    public function Datakavlings()
    {
        return $this->hasMany('App\Datakavling');
    } 
    
    public function Penjualankavling()
    {
        return $this->hasMany('App\Penjualankavling');
    }
    public function Penjualantunai()
    {
        return $this->hasMany('App\Penjualantunai');
    }
    public function lamaangsurantambahs()
    {
        return $this->hasMany('App\Lamaangsurantambah','id');
    }
}

