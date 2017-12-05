<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class p_kategori extends Model
{
    protected $fillable = ['nama_kategori'];
    protected $table = 'p_kategori';
    protected $primaryKey = 'p_kategori_id';
}


