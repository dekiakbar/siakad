<?php

use Illuminate\Database\Seeder;

class dosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
        	'nip' => "12543",
            'nama' => "Sutejo",
            'jeniskelamin' => "Laki-Laki",
            'alamat' => "Sukabumi",
            'notlp' => "08999999999",
        ]);
    }
}
