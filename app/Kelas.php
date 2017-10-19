<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Kelas extends Model
{
	use Sortable;

    protected $fillable = ['kode_kelas','kode_jurusan','nama_kelas','tahun'];
    protected $table = 'kelas';

    public $sortable =['kode_kelas','kode_jurusan','nama_kelas','tahun'];

    public function jurusan()
    {
    	return $this->hasOne('App\Jurusan','id');
    }
}
