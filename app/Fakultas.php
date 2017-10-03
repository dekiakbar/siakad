<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $fillable = ['kode_fak','nama_fak'];
    protected $table = 'fakultas';

    public function jurusan()
    {
    	return $this->belongsTo('App\Jurusan');
    }
}
