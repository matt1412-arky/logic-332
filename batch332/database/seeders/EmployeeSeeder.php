<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use faker\Factory as faker;
use Illuminate\Database\Console\DbCommand;
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
        $faker = faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('employees')->insert([
                'name' => $faker->name,
                'employee_id' => $faker->unique()->randomNumber('###'),
                'position' => $faker->jobTitle
            ]);
        }
    }
}
