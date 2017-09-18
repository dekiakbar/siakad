<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable =['kode_jurusan','nama_jurusan','jenjang'];
    protected $table ='jurusan';
}
