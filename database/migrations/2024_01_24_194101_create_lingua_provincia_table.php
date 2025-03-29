<?php

use App\Models\Lingua;
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
        Schema::create('lingua_provincia', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Provincia::class)->references('id')->on('provincias');
            $table->foreignIdFor(Lingua::class)->references('id')->on('linguas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lingua_provincia');
    }
};
