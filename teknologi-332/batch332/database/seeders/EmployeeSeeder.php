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

        for($i=1; $i<=10; $i++) {
            DB::table('employees')-> insert([
                'name' => $faker->name,
                'employee_id' => $faker->unique()->randomNumber(),
                'position' => $faker->jobTitle
            ]);
        }
    }
}
