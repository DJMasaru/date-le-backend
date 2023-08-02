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
            'value' => 'やるねえ！',
            'user_id' => 3,
            'job_id' => 1,
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'value' => 'また詳細教えて！',
            'user_id' => 1,
            'job_id' => 3,
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'value' => '羨ましい！',
            'user_id' => 1,
            'job_id' => 3,
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'value' => '今度ダブルデートしよ！',
            'user_id' => 1,
            'job_id' => 3,
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'value' => '試されてるなあ！',
            'user_id' => 1,
            'job_id' => 3,
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'value' => '僕も頑張ろう！',
            'user_id' => 1,
            'job_id' => 3,
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'value' => 'どこのご飯屋さんに行くの？',
            'user_id' => 1,
            'job_id' => 3,
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'value' => '楽しくなりそう！',
            'user_id' => 1,
            'job_id' => 3,
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'value' => 'デートルート気になる！',
            'user_id' => 1,
            'job_id' => 3,
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
            [
            'value' => 'どんなやり取りする予定？',
            'user_id' => 1,
            'job_id' => 3,
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
        ]);
    }
}
