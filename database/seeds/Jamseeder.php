<?php

use Illuminate\Database\Seeder;

class Jamseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ID_id');
        $waktu = [	"08:00","08:45","09:30","10:15","11:00","11:45","12:15","13:00","13:45",
					"14:30","15:15","16:00","16:45","17:30","18:15","19:00","19:45","20:30",
					"21:15","22:00"
				];
		$limit = 20;

		for ($i=0; $i < $limit ; $i++) { 
			DB::table('jam')->insert([
				'kode_jam' => $faker->numerify('Jm###'),
				'waktu_mulai' => $waktu[$i],
				'waktu_selesai' => $waktu[$i+1]
			]);
		}
    }
}
