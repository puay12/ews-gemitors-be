<?php

namespace Database\Seeders;

use App\Models\HealthRecords;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HealthRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++){
            HealthRecords::create([
                'patient_id' => 10,
                'heart_rate' => (string)random_int(40,190),
                'systolic_blood_pressure' => (string)random_int(60,190),
                'diastolic_blood_pressure' => (string)random_int(10,100),
                'respiratory_rate' => (string)random_int(10,25),
                'temperature' => (string)random_int(30,38),
                'spo2' => (string)random_int(80,100),
                'created_at' => Carbon::now()->timestamp,
                'updated_at' => Carbon::now()->timestamp
            ]);
        }
    }
}
