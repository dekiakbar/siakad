<?php

use Illuminate\Database\Seeder;

use App\Jurusan;

class kelasSeeder extends Seeder
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

        for ($i=0; $i < $limit ; $i++) { 
        	$jrs = Jurusan::find($faker->numberBetween($min=1,$max=9));
        	DB::table('kelas')->insert([
        		'kode_kelas' => $faker->numerify('K####'),
        		'nama_kelas' => $faker->numerify('C ##'),
        		'kode_jurusan' => $jrs->kode_jurusan,
        		'tahun' => $faker->date($format = 'Y-m-d', $max = 'now'),
        	]);
        }
    }
}
