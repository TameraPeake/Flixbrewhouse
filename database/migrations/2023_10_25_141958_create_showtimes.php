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
        Schema::create('showtimes', function (Blueprint $table) {
            $table->id();
            $table->string('movieTitle');
            $table->date('movieDate'); //YYYY-MM-DD
            $table->time('movieTime1Begin'); //00:00:00
            $table->time('movieTime1End');
            $table->time('movieTime2Begin');
            $table->time('movieTime2End');
            $table->time('movieTime3Begin')->nullable();
            $table->time('movieTime3End')->nullable();
            $table->time('movieTime4Begin')->nullable();
            $table->time('movieTime4End')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('showtimes');
    }
};
