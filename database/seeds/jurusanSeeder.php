<?php

use Illuminate\Database\Seeder;
use App\Fakultas;

class jurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        $limit = 3;
        $fak = Fakultas::all()->pluck('id');

        for ($i=0; $i < $limit ; $i++) { 
            foreach ($fak as $fakultas) {
                DB::table('jurusan')->insert([
                    'kode_jurusan' => $faker->unique()->numerify('J###'),
                    'nama_jurusan' => $faker->word,
                    'id_fakultas' => $faker->randomElement(array($fakultas)),
                    'jenjang' => $faker->randomElement($array = array('D1','D3','S1','S2','S3')),
                    'jumlah_semester' => $faker->randomElement($array = array('2','6','8','10','12')), 
                ]);
            }
        }
    }
}
