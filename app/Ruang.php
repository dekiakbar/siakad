<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Ruang extends Model
{
	use Sortable;

    protected $fillable = ['kode_ruang','nama_ruang'];
    protected $table = 'ruang';

    public $sortable = ['kode_ruang','nama_ruang'];

    public function jadwal(){
    	return $this->belongsToMany('App\Jadwal','id');
    }
}
