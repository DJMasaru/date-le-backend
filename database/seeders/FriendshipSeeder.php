<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FriendshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * statusが0は「リクエスト中」1は「フォロー中」
     */
    public function run(): void
    {
        DB::table('friendships')->insert([
            [
                'user_id' => '1',
                'friend_id' => '2',
                'status' => 1,
            ],
            [
                'user_id' => '1',
                'friend_id' => '3',
                'status' => 1,
            ],
            [
                'user_id' => '1',
                'friend_id' => '4',
                'status' => 1,
            ],
            [
                'user_id' => '1',
                'friend_id' => '5',
                'status' => 1,
            ],
            [
                'user_id' => '1',
                'friend_id' => '6',
                'status' => 1,
            ],
            [
                'user_id' => '1',
                'friend_id' => '7',
                'status' => 1,
            ],
        ]);
    }
}
