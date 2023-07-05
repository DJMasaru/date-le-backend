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
        Schema::create('comment_on_date_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('value', 128);
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('job_id')->constrained('date_jobs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment_on_date_jobs');
    }
};
