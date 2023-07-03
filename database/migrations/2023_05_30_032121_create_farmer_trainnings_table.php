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
        Schema::create('farmer_trainnings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('farmer_trainning_no');
            $table->string('participant_no');
            $table->string('training_date');
            $table->string('location_lattitude');
            $table->string('location_longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer_trainnings');
    }
};
