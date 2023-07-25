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
            [
            'value' => 'さすが！頑張ってんな！',
            'user_id' => 2,
            'job_id' => 1,
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'value' => 'やるねえ',
            'user_id' => 3,
            'job_id' => 1,
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'value' => '友達のコメント取得完了',
            'user_id' => 1,
            'job_id' => 3,
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
        ]);
    }
}
