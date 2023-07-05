<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        [
        'name' => 'test',
        'email' => 'example@example.example',
        'email_verified_at' => now(),
        'password'=>Hash::make('Kisiemon@0803'),
        'created_at'=>now(),
        'updated_at'=>now(),
        ],
        [
            'name' => 'まさき',
            'email' => 'example@masaki.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('Kisiemon@0803'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'しんや',
            'email' => 'example@shinya.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('Kisiemon@0803'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
        'name' => 'おたけ',
            'email' => 'example@otake.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('Kisiemon@0803'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'たかのり',
            'email' => 'example@takanori.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('Kisiemon@0803'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'しゅうえい',
            'email' => 'example@shuei.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('Kisiemon@0803'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
            [
            'name' => 'だいち',
            'email' => 'example@daichi.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('Kisiemon@0803'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]
        ]);
    }
}
