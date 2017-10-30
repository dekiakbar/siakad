<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Hari extends Model
{
    use Sortable;

    protected $fillable = ['kode_hari','nama_hari'];
    protected $table = 'hari';
    public $sortable = ['kode_hari','nama_hari'];

    public function jadwal(){
    	return $this->belongsTo('App\Jadwal');
    }
}
