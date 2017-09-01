<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nim','nama','alamat','jenis_kelamin','no_tlp','tempat','tanggal','id_jurusan'];
    protected $table = 'mahasiswa';
}
