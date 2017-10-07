<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $fillable = ['id_ruang','nama_ruang'];
    protected $table = 'ruang';
}
