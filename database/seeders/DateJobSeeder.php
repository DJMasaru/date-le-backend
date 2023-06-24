<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DateJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('date_jobs')->insert([
            [
                'user_id' => 1,
                'girl_id' => 1,
                'date_of_date' => '2024/01/20',
                'date_of_time' => '18:00',
                'date_of_place' => '六本木',
                'comment_count' => 15,
                'favorite_count' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'girl_id' => 2,
                'date_of_date' => '2024/01/25',
                'date_of_time' => '20:00',
                'date_of_place' => '渋谷',
                'comment_count' => 10,
                'favorite_count' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
