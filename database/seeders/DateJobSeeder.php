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
            [
                'user_id' => 2,
                'girl_id' => 3,
                'date_of_date' => '2023/12/20',
                'date_of_time' => '18:00',
                'date_of_place' => '北千住',
                'comment_count' => 15,
                'favorite_count' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'girl_id' => 4,
                'date_of_date' => '2023/12/15',
                'date_of_time' => '20:00',
                'date_of_place' => '丸の内',
                'comment_count' => 10,
                'favorite_count' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'girl_id' => 5,
                'date_of_date' => '2024/01/25',
                'date_of_time' => '18:00',
                'date_of_place' => '秋葉原',
                'comment_count' => 15,
                'favorite_count' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'girl_id' => 6,
                'date_of_date' => '2023/12/20',
                'date_of_time' => '18:00',
                'date_of_place' => '品川',
                'comment_count' => 15,
                'favorite_count' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'girl_id' => 7,
                'date_of_date' => '2023/12/20',
                'date_of_time' => '18:00',
                'date_of_place' => '浜松町',
                'comment_count' => 15,
                'favorite_count' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 7,
                'girl_id' => 8,
                'date_of_date' => '2023/12/20',
                'date_of_time' => '18:00',
                'date_of_place' => '新宿',
                'comment_count' => 15,
                'favorite_count' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'girl_id' => 10,
                'date_of_date' => '2023/12/15',
                'date_of_time' => '20:00',
                'date_of_place' => '池袋',
                'comment_count' => 10,
                'favorite_count' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'girl_id' => 11,
                'date_of_date' => '2024/01/25',
                'date_of_time' => '18:00',
                'date_of_place' => '西麻布',
                'comment_count' => 15,
                'favorite_count' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'girl_id' => 12,
                'date_of_date' => '2024/02/24',
                'date_of_time' => '20:00',
                'date_of_place' => '恵比寿',
                'comment_count' => 10,
                'favorite_count' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'girl_id' => 13,
                'date_of_date' => '2024/02/11',
                'date_of_time' => '18:00',
                'date_of_place' => '上野',
                'comment_count' => 15,
                'favorite_count' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'girl_id' => 14,
                'date_of_date' => '2023/11/25',
                'date_of_time' => '20:00',
                'date_of_place' => '代々木公園',
                'comment_count' => 10,
                'favorite_count' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
