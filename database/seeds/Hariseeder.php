<?php

use Illuminate\Database\Seeder;

class Hariseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create('ID_id');
    	$hari = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];

        for ($i=0; $i < 7; $i++) { 
        	DB::table('hari')->insert([
        		'kode_hari' => $faker->numerify('H###'),
        		'nama_hari' => $hari[$i]
        	]);
        }
    }
}
