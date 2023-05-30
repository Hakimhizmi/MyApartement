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
        Schema::create('apartement_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idA');
            $table->unsignedBigInteger('idO');
            $table->foreign('idA')->references('id')->on('apartements')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idO')->references('id')->on('options')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartement_options');
    }
};
