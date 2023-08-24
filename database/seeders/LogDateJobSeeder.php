<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogDateJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('log_date_jobs')->insert([
            [
                'user_id' => 1,
                'girl_id' => 1,
                'date_of_date' => '2023/07/23',
                'time_of_date' => '18:00',
                'place_of_date' => '六本木',
                'passion'=>'初対面。仲良くなる。',
                'target'=>'次のデートに備える。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'girl_id' => 2,
                'date_of_date' => '2023/06/15',
                'time_of_date' => '19:30',
                'place_of_date' => '渋谷',
                'passion' => 'お互いの趣味について語る。',
                'target' => '深い話題を共有する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'girl_id' => 3,
                'date_of_date' => '2023/06/28',
                'time_of_date' => '20:00',
                'place_of_date' => '新宿',
                'passion' => '美味しい料理を楽しむ。',
                'target' => 'お互いの好みを知る。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'girl_id' => 4,
                'date_of_date' => '2023/08/10',
                'time_of_date' => '19:00',
                'place_of_date' => 'お台場',
                'passion' => '夜景を楽しむ。',
                'target' => 'お互いの趣味について深く掘り下げる。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'girl_id' => 5,
                'date_of_date' => '2023/07/15',
                'time_of_date' => '17:30',
                'place_of_date' => '池袋',
                'passion' => 'ショッピングを楽しむ。',
                'target' => '共通の興味を見つける。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'girl_id' => 6,
                'date_of_date' => '2023/08/03',
                'time_of_date' => '21:00',
                'place_of_date' => '銀座',
                'passion' => '高級レストランでディナー。',
                'target' => '深い話題で心を通わせる。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'girl_id' => 7,
                'date_of_date' => '2023/06/20',
                'time_of_date' => '18:30',
                'place_of_date' => '原宿',
                'passion' => 'カフェ巡りを楽しむ。',
                'target' => 'お互いの人生観を共有する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'girl_id' => 8,
                'date_of_date' => '2023/08/28',
                'time_of_date' => '20:30',
                'place_of_date' => '中目黒',
                'passion' => 'ライブミュージックを楽しむ。',
                'target' => 'お互いの趣味についてさらに深く話す。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'girl_id' => 9,
                'date_of_date' => '2023/07/12',
                'time_of_date' => '19:00',
                'place_of_date' => '恵比寿',
                'passion' => 'おしゃれなレストランでディナー。',
                'target' => 'お互いの家族や背景について話す。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
