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
        Schema::create('girls_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->integer('age');
            $table->string('occupation', 20);
            $table->string('image_url');
            $table->unsignedBigInteger('user_id')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('girls_profiles');
    }
};
