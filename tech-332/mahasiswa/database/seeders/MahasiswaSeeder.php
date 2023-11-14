<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        for ($i = 1; $i <= 20; $i++) {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $namaMahasiswa = $firstName . ' ' . $lastName;
            DB::table('mahasiswas')->insert([
                'kode_mahasiswa' => 'M' . str_repeat('0', 3 - strlen($i)) . $i,
                'nama_mahasiswa' => $namaMahasiswa,
                'email' => str_replace(' ', '.', strtolower($namaMahasiswa)) . '@example.com',
                'jurusan' => $faker->randomElement(['Teknik Informatika', 'Manajemen Informatika', 'Sistem Informasi', 'Sistem Komputer', 'Komputer Akutansi']),
                'tanggal_lahir' => $faker->date(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
