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
        Schema::create('bike_spare', function (Blueprint $table) {
            $table->id();
            //bike
            $table->unsignedBigInteger('bike_id');
            $table->foreign('bike_id')->references('id')->on('bikes');
            //spare
            $table->unsignedBigInteger('spare_id');
            $table->foreign('spare_id')->references('id')->on('spares');
            //$table->timestamps(); posssiamo anche togliere il timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bike_spare');
    }
};
