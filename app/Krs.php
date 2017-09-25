<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    protected $fillable = ['nim','nip','kode_mk','absen','uts','uas'];
    protected $table = 'krs';

    public function mahasiswa(){
    	return $this->hasMany('App\Mahasiswa');
    }

    public function dosen(){
    	return $this->hasMany('App\Dosen');
    }


}