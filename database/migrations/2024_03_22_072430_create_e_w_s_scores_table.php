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
        Schema::create('ews_scores', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('record_id');
            $table->string('heart_score', 50);
            $table->string('sys_score', 50);
            $table->string('dias_score', 50);
            $table->string('respiratory_score', 50);
            $table->string('temp_score', 50);
            $table->string('spo2_score', 50);
            $table->string('ews_score', 50);
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_w_s_scores');
    }
};
