<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Carbon;
class Penjualankavling extends Model
{
    protected $fillable = ['kategori_id','subkategori_id','datakavling_id','datapembeli_id','datamarketing_id',
    'metodepembayaran_id','lamaangsurantambah_id','tanggal','promo','dp','tertanggal',
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
    public function angsurans()
{

        return $this->hasMany('App\Angsuran');
}
    public function lamaangsurantambah(){

        return $this->belongsTo('App\Lamaangsurantambah','lamaangsurantambah_id');
}
public function penjualanlaporan()
{

        return $this->hasMany('App\Penjualanlaporan');
}

}
