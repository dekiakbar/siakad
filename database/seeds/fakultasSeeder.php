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
        $faker = Faker\Factory::create('id_ID');

        $limit =3;

        for ($i=0; $i < $limit; $i++) { 
            DB::table('fakultas')->insert([
                'kode_fak' => $faker->unique()->numberBetween($min=1,$max=20),
                'nama_fak' => $faker->word,
            ]);
        }
    }
}
