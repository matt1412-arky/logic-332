<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i <= 10; $i++) {
            DB::table('employees')->insert([
                'name' => $faker->name,
                'employee_id' => 'EMP' . str_pad($i + 1, 3, '0', STR_PAD_LEFT),
                'position' => $faker->jobTitle,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
