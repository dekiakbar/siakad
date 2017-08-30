<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nim','nama','alamat','jenis_kelamin','no_tlp','ttl','id_jurusan'];
}
