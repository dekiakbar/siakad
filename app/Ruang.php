<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Ruang extends Model
{
	use Sortable;

    protected $fillable = ['nama_ruang'];
    protected $table = 'ruang';

    public $sortable = ['nama_ruang'];
}
