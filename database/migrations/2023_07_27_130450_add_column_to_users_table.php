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
        Schema::table('users', function (Blueprint $table) {
            $table->string('occupation', 20)->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('hobby')->nullable();
            $table->integer('girl_experiences')->nullable();
            $table->integer('age')->nullable();
            $table->string('favorite_date_place')->nullable();
            $table->string('favorite_date_time')->nullable();
            $table->string('favorite_clothes')->nullable();
            $table->string('favorite_character')->nullable();
            $table->string('favorite_feature')->nullable();
            $table->string('favorite_age_range')->nullable();
            $table->string('notice')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('occupation');
            $table->dropColumn('birthday');
            $table->dropColumn('address');
            $table->dropColumn('hobby');
            $table->dropColumn('girl_experiences');
            $table->dropColumn('favorite_date_place');
            $table->dropColumn('favorite_date_time');
            $table->dropColumn('favorite_clothes');
            $table->dropColumn('favorite_character');
            $table->dropColumn('favorite_feature');
            $table->dropColumn('favorite_age_range');
            $table->dropColumn('notice');
        });
    }
};
