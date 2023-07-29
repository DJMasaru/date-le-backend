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
                'followed_user_id' => '2',
                'status' => 1,
            ],
            [
                'user_id' => '1',
                'followed_user_id' => '3',
                'status' => 1,
            ],
            [
                'user_id' => '1',
                'followed_user_id' => '4',
                'status' => 1,
            ],
            [
                'user_id' => '5',
                'followed_user_id' => '1',
                'status' => 2,
            ],
            [
                'user_id' => '1',
                'followed_user_id' => '6',
                'status' => 1,
            ],
            [
                'user_id' => '1',
                'followed_user_id' => '7',
                'status' => 1,
            ],
            [
                'user_id' => '2',
                'followed_user_id' => '1',
                'status' => 1,
            ],
            [
                'user_id' => '3',
                'followed_user_id' => '1',
                'status' => 1,
            ],
            [
                'user_id' => '4',
                'followed_user_id' => '1',
                'status' => 1,
            ],
            [
                'user_id' => '8',
                'followed_user_id' => '1',
                'status' => 1,
            ],
            [
                'user_id' => '1',
                'followed_user_id' => '8',
                'status' => 2,
            ],


        ]);
    }
}
