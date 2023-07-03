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
        Schema::create('block_demonstrations', function (Blueprint $table) {
            $table->id();
            $table->string('crop_name');
            $table->string('variety_name');
            $table->string('demonstration_no');
            $table->string('area_name');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('block_demonstrations');
    }
};
