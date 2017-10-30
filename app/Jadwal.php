<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Jadwal extends Model
{
	use Sortable;
   protected $fillable = ['kode_jadwal','nip','kode_jurusan','kode_ruang','kode_kelas'];
   protected $table='jadwal';

   public $sortable =['kode_jadwal','nip','kode_jurusan','kode_ruang','kode_kelas'];

   public function dosen(){
   		return $this->hasMany('App\Dosen');
   }

   public function jurusan(){
   		return $this->hasMany('App\Jurusan');
   }

   public function ruang(){
   		return $this->hasMany('App\Ruang');
   }

   public function kelas(){
   		return $this->hasMany('App\Kelas');
   }

   public function makul(){
      return $this->hasMany('App\Matakuliah');
   }

   public function hari(){
      return $this->hasMany('App\Hari');
   }

   public function jam(){
      return $this->hasMany('App\Jam');
   }
}
