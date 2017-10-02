<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(adminSeeder::class);
        $this->call(dosenSeeder::class);
        $this->call(jurusanSeeder::class);
        $this->call(mahasiswaSeeder::class);
        $this->call(makulSeeder::class);
        $this->call(krsSeeder::class);
    }
}
