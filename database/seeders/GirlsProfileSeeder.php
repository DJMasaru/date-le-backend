<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GirlsProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('girls_profiles')->insert([
            [
            'name' => 'りこ',
            'age' => 22,
            'occupation' => '大手商社',
            'image_url'=> 'hogehoge',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'ゆい',
            'age' => 23,
            'occupation' => '大手銀行',
            'image_url'=> 'hogehoge',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'まりこ',
            'age' => 22,
            'occupation' => 'IT営業',
            'image_url'=> 'hogehoge',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'かおる',
            'age' => 23,
            'occupation' => 'カーディーラー',
            'image_url'=> 'hogehoge',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
                'name' => 'しおり',
                'age' => 22,
                'occupation' => '保育士',
                'image_url'=> 'hogehoge',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ゆりえ',
                'age' => 23,
                'occupation' => 'スポーツトレーナー',
                'image_url'=> 'hogehoge',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ゆか',
                'age' => 22,
                'occupation' => '鉄鋼メーカー',
                'image_url'=> 'hogehoge',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'えりな',
                'age' => 23,
                'occupation' => '化学メーカー',
                'image_url'=> 'hogehoge',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
            'name' => 'ゆりこ',
            'age' => 26,
            'occupation' => 'エステティシャン',
            'image_url'=> 'hogehoge',
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'はるか',
            'age' => 23,
            'occupation' => 'レースクイーン',
            'image_url'=> 'hogehoge',
            'user_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            ],
                [
            'name' => 'りこ',
            'age' => 22,
            'occupation' => '秘書',
            'image_url'=> 'hogehoge',
            'user_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'れいな',
            'age' => 23,
            'occupation' => '声優',
            'image_url'=> 'hogehoge',
            'user_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
                'name' => 'ひかり',
                'age' => 22,
                'occupation' => 'CA(JAL)',
                'image_url'=> 'hogehoge',
                'user_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ももこ',
                'age' => 23,
                'occupation' => '証券会社',
                'image_url'=> 'hogehoge',
                'user_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
