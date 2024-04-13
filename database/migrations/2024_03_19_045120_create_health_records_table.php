<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('health_records', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('patient_id');
            $table->string('heart_rate', 50);
            $table->string('systolic_blood_pressure', 50);
            $table->string('diastolic_blood_pressure', 50);
            $table->string('respiratory_rate', 50);
            $table->string('temperature', 50);
            $table->string('spo2', 50);
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_records');
    }
};
