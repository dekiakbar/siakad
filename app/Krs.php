<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Krs extends Model
{
    use Sortable;

    protected $fillable = ['nim','nip','kode_mk','absen','uts','uas'];
    protected $table = 'krs';

    public $sortable = ['nim','nip','kode_mk'];

    public function mahasiswas(){
    	return $this->belongsToMany('App\Mahasiswa','id');
    }

    public function dosens(){
    	return $this->belongsToMany('App\Dosen','id');
    }

    public function makuls(){
    	return $this->belongsToMany('App\Matakuliah','id');
    }


}