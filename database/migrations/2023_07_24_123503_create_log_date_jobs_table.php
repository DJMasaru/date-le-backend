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
        Schema::create('log_date_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('girl_id')->constrained('girls_profiles')->onDelete('cascade');
            $table->date('date_of_date')->nullable();
            $table->time('time_of_date')->nullable();
            $table->string('place_of_date', 30)->nullable();
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
        Schema::dropIfExists('log_date_jobs');
    }
};
