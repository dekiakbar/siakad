<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Webprofile extends Model
{
    protected $fillable = 
    					[
    						'nama_kampus','judul_about','isi_about','foto_about','alamat_kampus','telepon_kampus',
    						'fax_kampus','email_kampus','fb_kampus','twitter_kampus','','linkedin_kampus','google_kampus',
    						'koordinat','foto_slider1','foto_slider2','foto_slider3'
    					];
    					
    protected $table = 'webprofile';
}
