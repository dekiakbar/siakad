<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable =['nip','nama','jeniskelamin','alamat','notlp'];
    protected $table='dosen';

    public function krs(){
    	return $this->belongsTo('App\Krs');
    }
}
