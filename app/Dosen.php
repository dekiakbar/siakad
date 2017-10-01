<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable =['nip','nama_dosen','jeniskelamin','alamat','notlp'];
    protected $table='dosen';

    public function krs(){
    	return $this->belongsToMany('App\Krs','id');
    }
}
