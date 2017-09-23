<?php

use Illuminate\Database\Seeder;

class jurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
        	'kode_jurusan' => "1254",
            'nama_jurusan' => "Teknik Informatika ",
            'jenjang' => "S1",
            'jumlah_semester' => 8, 
        ]);
    }
}
