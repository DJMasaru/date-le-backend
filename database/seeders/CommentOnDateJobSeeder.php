<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentOnDateJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comment_on_date_jobs')->insert([
            'value' => 'さすが！頑張ってんな！',
            'user_id' => 1,
            'girl_id' => 1,
            'friend_id' => 2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
