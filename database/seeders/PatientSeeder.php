<?php

namespace Database\Seeders;

use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $genders = ['P', 'L'];

        for ($i = 0; $i < 10; $i++){
            Patient::create([
                'name' => $faker->name(),
                'gender' => $genders[array_rand($genders)],
                'age' => (string)random_int(12,90),
                'height' => (string)random_int(140,180),
                'weight' => (string)random_int(40,70),
                'phone' => $faker->phoneNumber(),
                'created_at' => Carbon::now()->timestamp
            ]);
        }
    }
}
