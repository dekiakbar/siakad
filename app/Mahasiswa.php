<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Mahasiswa extends Model
{
	use Sortable;
	
    protected $fillable = ['nim','nama','alamat','jenis_kelamin','no_tlp','email','tempat','tanggal','link','id_jurusan'];
    protected $table = 'mahasiswa';
    public $sortable = ['nim','nama','alamat','jenis_kelamin','tanggal'];

    public function jurusan(){
    	return $this->hasOne('App\Jurusan','kode_jurusan');
    }

    public function krs(){
    	return $this->belongsToMany('App\Krs','id');
    }
}

