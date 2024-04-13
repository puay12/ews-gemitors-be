<?php

namespace Database\Seeders;

use App\Models\EWSScore;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EWSScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++){
            EWSScore::create([
                'record_id' => 8,
                'heart_score' => (string)random_int(40,190),
                'sys_score' => (string)random_int(60,190),
                'dias_score' => (string)random_int(10,100),
                'respiratory_score' => (string)random_int(10,25),
                'temp_score' => (string)random_int(30,38),
                'spo2_score' => (string)random_int(80,100),
                'ews_score' => (string)random_int(0,7),
                'created_at' => Carbon::now()->timestamp,
                'updated_at' => Carbon::now()->timestamp
            ]);
        }
    }
}
