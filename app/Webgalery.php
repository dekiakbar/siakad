<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Webgalery extends Model
{
    protected $fillable = ['deskripsi_galeri','foto_galery','foto_background1','foto_background2','foto_background3'];
    protected $table = 'webgalery';
}
