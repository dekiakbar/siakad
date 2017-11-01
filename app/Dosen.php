<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Dosen extends Model
{
	use Sortable;
	
    protected $fillable =['nip','nama_dosen','jeniskelamin','alamat','notlp'];
    protected $table='dosen';

    public $sortable = ['nip','nama_dosen','jeniskelamin','alamat'];

    public function krs(){
    	return $this->belongsToMany('App\Krs','id');
    }

    public function jadwal(){
    	return $this->belongsToMany('App\Jadwal','id');
    }
}
