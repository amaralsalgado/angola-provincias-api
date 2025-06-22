<?php

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
        Schema::create('capitais', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Provincia::class)->references('id')->on('provincias')->cascadeOnDelete();
            $table->morphs('capitalable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capitais');
    }
};
