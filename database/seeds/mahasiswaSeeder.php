<?php

use Illuminate\Database\Seeder;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nim' => "1234",
            'nama' => "Deki Akbar",
            'alamat' => "jln.pemuda",
            'jenis_kelamin' => "Laki-Laki",
            'no_tlp' => "0899999999",
            'email' => "deki".'@gmail.com',
            'tempat' => 'sukabumi',
            'tanggal' => date('2017-01-12'),
            'link' => "/public",
            'id_jurusan' => 1,
        ]);
    }
}
