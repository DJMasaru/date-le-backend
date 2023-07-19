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
            $table->integer('age')->nullable();
            $table->string('occupation', 20);
            $table->string('image_url')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('feature_first',10);
            $table->string('feature_second',10);
            $table->string('feature_third',10);
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('hobby')->nullable();
            $table->string('character',20)->nullable();
            $table->string('favorite_type_of_man')->nullable();
            $table->string('favorite_foods')->nullable();
            $table->string('dislike_foods')->nullable();
            $table->string('opportunity_to_meet')->nullable();
            $table->string('notice')->nullable();
            $table->boolean('has_boyfriend')->nullable();
            $table->integer('count_of_dates')->nullable();
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
