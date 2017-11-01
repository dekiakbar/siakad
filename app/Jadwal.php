<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Jadwal extends Model
{
	use Sortable;
   
   protected $fillable = ['kode_jadwal','nip','kode_jurusan','kode_ruang','kode_kelas','kode_mk','kode_hari','kode_jam'];
   protected $table='jadwal';

   public $sortable =['kode_jadwal','nip','kode_jurusan','kode_ruang','kode_kelas','kode_mk','kode_hari','kode_jam'];

   public function dosen(){
		return $this->hasMany('App\Dosen','id');
   }

   public function jurusan(){
   	return $this->hasMany('App\Jurusan','id');
   }

   public function ruang(){
   	return $this->hasMany('App\Ruang','id');
   }

   public function kelas(){
   	return $this->hasMany('App\Kelas','id');
   }

   public function makul(){
      return $this->hasMany('App\Matakuliah','id');
   }

   public function hari(){
      return $this->hasMany('App\Hari','id');
   }

   public function jam(){
      return $this->hasMany('App\Jam','id');
   }

}
