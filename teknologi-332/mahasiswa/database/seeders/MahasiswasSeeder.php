<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $agamaAgama = ['Islam', 'Kristen', 'Hindu', 'Buddha', 'Katolik'];
        
        for($i=1; $i<=10; $i++) {
            DB::table('mahasiswas')-> insert([
                'name' => $faker->name,
                'nim' => $faker->unique()->randomNumber(8),
                'alamat' => $faker->address,
                'tanggalLahir' => $faker->date,
                'agama' => $faker->randomElement($agamaAgama),
            ]);
        }
    }
}