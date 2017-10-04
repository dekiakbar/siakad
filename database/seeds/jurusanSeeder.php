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
            [
            	'kode_jurusan' => "1254",
                'nama_jurusan' => "Teknik Informatika ",
                'id_fakultas' => "1",
                'jenjang' => "S1",
                'jumlah_semester' => 8, 
            ],
            [
                'kode_jurusan' => "125",
                'nama_jurusan' => "Teknik Sipil",
                'id_fakultas' => "2",
                'jenjang' => "S1",
                'jumlah_semester' => 8, 
            ],
            [
                'kode_jurusan' => "12",
                'nama_jurusan' => "Teknik Elektronika",
                'id_fakultas' => "1",
                'jenjang' => "D3",
                'jumlah_semester' => 6, 
            ]
        ]);
    }
}
