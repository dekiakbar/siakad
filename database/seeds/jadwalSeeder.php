<?php

use Illuminate\Database\Seeder;

class jadwalSeeder extends Seeder
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
        	DB::table('jadwal')->insert([
        		'kode_jadwal' => $faker->unique()->numerify('Jd###'), 
        		'nip' => \App\Dosen::where('id',($faker->numberBetween($min=1,$max=10)))->first()->nip,
        		'kode_jurusan' => \App\Jurusan::where('id',($faker->numberBetween($min=1,$max=3)))->first()->kode_jurusan,
        		'kode_kelas' => \App\Kelas::where('id',($faker->numberBetween($min=1,$max=20)))->first()->kode_kelas,
        		'kode_ruang' => \App\Ruang::where('id',($faker->numberBetween($min=1,$max=20)))->first()->kode_ruang,
        		'kode_mk' => \App\Matakuliah::where('id',($faker->numberBetween($min=1,$max=10)))->first()->kode_mk,
        		'kode_hari' => \App\Hari::where('id',($faker->numberBetween($min=1,$max=7)))->first()->kode_hari,
        		'kode_jam' => \App\Jam::where('id',($faker->numberBetween($min=1,$max=10)))->first()->kode_jam,
        	]);
        }
    }
}
