<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_Kavling extends Model
{
    protected $fillable = ['nama'];
       
        public function Subkategories()
    {
        return $this->hasMany('App\Subkategori');

    }

        public function Datakavlings()
    {
        return $this->hasMany('App\Datakavling');
    }

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
