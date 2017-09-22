<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nim','nama','alamat','jenis_kelamin','no_tlp','email','tempat','tanggal','link','id_jurusan'];
    protected $table = 'mahasiswa';

    public function jurusan(){
    	return $this->hasOne('App\Jurusan');
    }
}

