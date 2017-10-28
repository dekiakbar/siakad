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
        $faker = Faker\Factory::create('id_ID');
        $limit = 10;

        for ($i=0; $i < $limit ; $i++) { 
        
            DB::table('mata_kuliah')->insert([
            	'kode_mk' => $faker->unique()->numerify('M###'),
                'makul' => $faker->word,
                'sks' => $faker->numberBetween($min=2,$max=4),
            ]);
        }
    }
}
