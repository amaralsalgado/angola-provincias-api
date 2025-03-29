<?php

use App\Models\Etnia;
use App\Models\Provincia;
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
        Schema::create('etnia_provincia', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Provincia::class)->references('id')->on('provincias');
            $table->foreignIdFor(Etnia::class)->references('id')->on('etnias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etnia_provincia');
    }
};
