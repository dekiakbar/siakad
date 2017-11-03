<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Jam extends Model
{
    use Sortable;

    protected $fillable = ['kode_jam','waktu_mulai','waktu_selesai'];
    protected $table = 'jam';

    public $sortable = ['kode_jam','waktu_mulai','waktu_selesai'];

    public function jadwal(){
    	return $this->belongsToMany('App\Jadwal','id');
    }
}
