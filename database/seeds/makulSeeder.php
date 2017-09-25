<?php

use Illuminate\Database\Seeder;

class makulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mata_kuliah')->insert([
            [
            	'kode_mk' => "12345",
                'makul' => "Pemrograman Web",
                'sks' => 2,
            ],
            [
                'kode_mk' => "128",
                'makul' => "Pemrograman Mobile",
                'sks' => 2,
            ]
        ]);
    }
}
