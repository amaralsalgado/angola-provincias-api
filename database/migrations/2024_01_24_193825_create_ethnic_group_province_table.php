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
        Schema::create('ethnic_group_province', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id')->references('id')->on('provinces');
            $table->foreignId('ethnic_group_id')->references('id')->on('ethnic_groups');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ethnic_group_province');
    }
};
