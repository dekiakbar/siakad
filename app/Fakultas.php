<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Fakultas extends Model
{
	use Sortable;
    protected $fillable = ['kode_fak','nama_fak'];
    protected $table = 'fakultas';

    public $sortable = ['kode_fak','nama_fak'];

    public function jurusan()
    {
    	return $this->belongsTo('App\Jurusan');
    }

}
