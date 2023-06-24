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
        Schema::table('date_jobs', function (Blueprint $table) {
            $table->dropUnique(['user_id']);
            $table->dropUnique(['girl_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('date_jobs', function (Blueprint $table) {
            $table->unique('user_id');
            $table->unique('girl_id');
        });
    }
};
