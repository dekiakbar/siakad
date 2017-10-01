<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    protected $fillable = ['nim','nip','kode_mk','absen','uts','uas'];
    protected $table = 'krs';

    public function mahasiswas(){
    	return $this->hasMany('App\Mahasiswa','id');
    }

    public function dosens(){
    	return $this->hasMany('App\Dosen','id');
    }

    public function makuls(){
    	return $this->hasMany('App\Matakuliah','id');
    }


}