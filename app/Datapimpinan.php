<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapimpinan extends Model
{
    protected $fillable = ['idpimpinan','nama','alamat','telepon','email','created_at','updated_at'];
       
}
