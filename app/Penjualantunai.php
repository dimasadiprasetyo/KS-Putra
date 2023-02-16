<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualantunai extends Model
{
    protected $fillable = ['kategori_id','subkategori_id','datakavling_id','datapembeli_id','datamarketing_id',
    'metodepembayaran_id','promo','bayar','tertanggal',
    'created_at','updated_at'];
    protected $dates=['tertanggal'];
    public $timestamps      = false;
    public function Kategori()
    {

        return $this->belongsTo('App\Kategori_Kavling');
}
    public function Subkategori()
{

        return $this->belongsTo('App\Subkategori', 'subkategori_id');
}
    public function Datakavling()
{

        return $this->belongsTo('App\Datakavling');
}
    public function Datapembeli()
{

        return $this->belongsTo('App\Datapembeli');
}
    public function Metodepembayaran()
{

        return $this->belongsTo('App\Metodepembayaran');
}
  
        public function Datamarketing()
{

        return $this->belongsTo('App\Datamarketing');
}
        public function tunais()
{

        return $this->hasMany('App\Tunai');
}
}
