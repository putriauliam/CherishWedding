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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('slug')->unique();
            $table->foreignId('category_id');
            $table->foreignId('city_id');
            $table->integer('price');
            $table->string('address');
            $table->string('koordinat_maps');
            $table->text('detail');
            $table->string('telp');
            $table->string('email')->nullable();
            $table->string('instagram')->nullable();
            $table->string('image')->nullable();
            $table->string('profil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
