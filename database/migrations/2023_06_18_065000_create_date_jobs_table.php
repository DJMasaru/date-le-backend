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
        Schema::create('date_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('girl_id')->constrained('girls_profiles');
            $table->date('date_of_date');
            $table->time('time_of_date');
            $table->string('place_of_date', 30);
            $table->integer('comment_count');
            $table->integer('favorite_count');
            $table->string('passion',30)->nullable();
            $table->string('target',30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('date_jobs');
    }
};
