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
        Schema::create('apartements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover');
            $table->longText('description');
            $table->float('surface');
            $table->integer('rooms');
            $table->integer('pieces');
            $table->integer('floor');
            $table->integer('price');
            $table->boolean('sold');
            $table->string('city');
            $table->string('adresse');
            $table->integer('postalcode');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartements');
    }
};
