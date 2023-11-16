<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $agamaAgama = ['Islam', 'Kristen', 'Hindu', 'Buddha', 'Yahudi'];

        for ($i = 1; $i <= 10; $i++) {
            DB::table('mahasiswas')->insert([
                'name' => $faker->name,
                'nim' => $faker->unique()->randomNumber(8),
                'alamat' => $faker->address,
                'tgl_lahir' => $faker->date,
                'agama' => $faker->randomElement($agamaAgama),
            ]);
        }
    }
}
