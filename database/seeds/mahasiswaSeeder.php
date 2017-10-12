<?php

use Illuminate\Database\Seeder;
use App\Jurusan;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        $jurusan = Jurusan::all()->pluck('id');
        $limit = 1;

        for ($i=0; $i < $limit; $i++) { 
            foreach ($jurusan as $jur) {
                DB::table('mahasiswa')->insert([
                    'nim' => $faker->unique()->numberBetween($min = 1, $max = 10000),
                    'nama' => $faker->name,
                    'alamat' => $faker->address,
                    'jenis_kelamin' => "Laki-Laki",
                    'no_tlp' => $faker->e164PhoneNumber,
                    'email' => $faker->freeEmail,
                    'tempat' => $faker->city,
                    'tanggal' => date('2017-01-12'),
                    'link' => "1505590327.jpg",
                    'id_jurusan' => $faker ->randomElement(array($jur)),
                ]);
            }
        }
    }
}
