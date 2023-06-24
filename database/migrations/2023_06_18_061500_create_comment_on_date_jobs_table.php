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
            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedBigInteger('girl_id')->unique();
            $table->unsignedBigInteger('friend_id')->unique();
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
