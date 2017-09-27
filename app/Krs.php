<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    protected $fillable = ['nim','nip','kode_mk','absen','uts','uas'];
    protected $table = 'krs';

    public function mahasiswa(){
    	return $this->hasMany('App\Mahasiswa','id','nama');
    }

    public function dosen(){
    	return $this->hasMany('App\Dosen','id','nip','nama');
    }

    public function makul(){
    	return $this->hasMany('App\Matakuliah','id','kode_mk','makul');
    }


}