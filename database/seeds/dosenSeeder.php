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
        $faker = Faker\Factory::create('id_ID');
        $limit = 10;
        for ($i=0; $i < $limit ; $i++) { 
            DB::table('dosen')->insert([
                	'nip' => $faker->unique()->numerify('D###'),
                    'nama_dosen' => $faker->name,
                    'jeniskelamin' => "Laki-Laki",
                    'alamat' => $faker->address,
                    'notlp' => $faker->e164PhoneNumber,
            ]);
        }
    }
}
