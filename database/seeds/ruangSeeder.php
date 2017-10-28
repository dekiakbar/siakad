<?php

use Illuminate\Database\Seeder;

class ruangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        $limit = 20;

        for ($i=0; $i < $limit; $i++) { 
        	DB::table('ruang')->insert([
                'kode_ruang' => $faker->unique()->numerify('R###'),
        		'nama_ruang' => $faker->word
        	]);
        }
    }
}
