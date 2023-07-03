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
        Schema::create('experiments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('objectives');
            $table->string('experimental_material');
            $table->string('treatment');
            $table->string('location_lattitude');
            $table->string('location_longitude');
            $table->string('recorded_date');
            $table->string('investigator_name');
            $table->string('starting_date');
            $table->string('completion_date');
            $table->string('expected_output');
            $table->string('picture_1');
            $table->string('picture_2');
            $table->string('picture_3');
            $table->string('picture_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiments');
    }
};
