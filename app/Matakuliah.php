<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Matakuliah extends Model
{
	use Sortable;

    protected $fillable = ['kode_mk','makul','sks'];
    protected $table = 'mata_kuliah';

    public $sortable= ['kode_mk','makul','sks'];

    public function krs(){
    	return $this->belongsToMany('App\Krs','id');
    }
}
