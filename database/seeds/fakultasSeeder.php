<?php

use Illuminate\Database\Seeder;

class fakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fakultas')->insert([
        	[
        		'kode_fak' => "54321",
        		'nama_fak' => "Kedokteran",
        	],
        	[
        		'kode_fak' => "5432",
        		'nama_fak' => "Teknik",
        	]
        ]);
    }
}
