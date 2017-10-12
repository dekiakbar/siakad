<?php

use Illuminate\Database\Seeder;

use App\Mahasiswa;
use App\Dosen;
use App\Matakuliah;

class krsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        $mhs = Mahasiswa::all()->pluck('nim');
        $dsn = Dosen::all()->pluck('nip');
        $makul = Matakuliah::all()->pluck('kode_mk');
        $limit = 1;

        for ($i=0; $i < $limit; $i++) { 
            foreach ($mhs as $mahasiswa) {
                foreach ($dsn as $dosen) {
                    foreach ($makul as $matakuliah) {
                        DB::table('krs')->insert([
                            'nim' => $faker->randomElement(array($mahasiswa)),
                            'nip' => $faker->randomElement(array($dosen)),
                            'kode_mk' => $faker->randomElement(array($matakuliah)),
                            'uts' => $faker->numberBetween($min=20,$max=100),
                            'uas' => $faker->numberBetween($min=20,$max=100),
                            'absen' => $faker->numberBetween($min=20,$max=100),         
                        ]);
                    }
                }
            }
        }
    }
}
