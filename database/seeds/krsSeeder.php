<?php

use Illuminate\Database\Seeder;

class krsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('krs')->insert([
        	[
        		'nim' => "1234",
        		'nip' => "12543",
        		'kode_mk' => "12345",
        		'uts' => 90,
        		'uas' => 80,
        		'absen' => 70,
        	],
        	[
        		'nim' => "123",
        		'nip' => "123",
        		'kode_mk' => "12345",
        		'uts' => 80,
        		'uas' => 80,
        		'absen' => 90,
        	],        	
        	[
        		'nim' => "123",
        		'nip' => "123",
        		'kode_mk' => "128",
        		'uts' => 90,
        		'uas' => 80,
        		'absen' => 80,
        	],
        	[
        		'nim' => "1234",
        		'nip' => "12543",
        		'kode_mk' => "128",
        		'uts' => 90,
        		'uas' => 80,
        		'absen' => 80,
        	]       	
        ]);
    }
}
