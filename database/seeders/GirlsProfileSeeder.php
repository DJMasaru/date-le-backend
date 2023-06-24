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
            'name' => 'りこ',
            'age' => 22,
            'occupation' => '大手商社',
            'image_url'=> 'hogehoge',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
