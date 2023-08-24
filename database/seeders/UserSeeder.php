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
            'password'=>Hash::make('exampleexample'),
            'image_url'=>'hoge',
            'occupation' => 'Web開発者',
            'birthday' => '1994-08-03',
            'address' => '東京都港区麻布十番',
            'hobby' => 'サウナ',
            'girl_experiences' => '5',
            'favorite_date_place' => '広尾周辺',
            'favorite_date_time' => '昼',
            'favorite_clothes' => '恵比寿女子',
            'favorite_character' => 'ちゃんと話ができる',
            'favorite_feature' => '目が大きい',
            'favorite_age_range' => '20代後半〜30代前半',
            'notice' => '頑張って身体を鍛えます。',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'まさき',
            'email' => 'example@masaki.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('exampleexample'),
            'image_url'=>'hoge',
            'occupation' => 'パーソナルトレーナー',
            'birthday' => '1990-05-15',
            'address' => '東京都千代田区',
            'hobby' => '筋トレ',
            'girl_experiences' => '3',
            'favorite_date_place' => '代々木公園',
            'favorite_date_time' => '夕方',
            'favorite_clothes' => 'ラフ',
            'favorite_character' => '意識高い',
            'favorite_feature' => '笑顔',
            'favorite_age_range' => '20代後半〜40代前半',
            'notice' => '一緒に筋トレしたいな。',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'しんや',
            'email' => 'example@shinya.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('exampleexample'),
            'image_url'=>'hoge',
            'occupation' => '自動車メーカー',
            'birthday' => '1992-11-30',
            'address' => '東京都世田谷区',
            'hobby' => 'ドライブ',
            'girl_experiences' => '10',
            'favorite_date_place' => '外苑前',
            'favorite_date_time' => '昼',
            'favorite_clothes' => 'カジュアル',
            'favorite_character' => '温厚',
            'favorite_feature' => '眉毛',
            'favorite_age_range' => '20代後半〜30代前半',
            'notice' => 'お互い仲良くしていきたい！',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'おたけ',
            'email' => 'example@otake.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('exampleexample'),
            'image_url'=>'hoge',
            'occupation' => '銀行員',
            'birthday' => '1988-09-20',
            'address' => '東京都品川区',
            'hobby' => '料理',
            'girl_experiences' => '4',
            'favorite_date_place' => '表参道',
            'favorite_date_time' => '昼間',
            'favorite_clothes' => 'おしゃれ',
            'favorite_character' => '思いやりがある',
            'favorite_feature' => '料理上手',
            'favorite_age_range' => '30代前半〜40代前半',
            'notice' => '盛り上がれる人いないかな。',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'たかのり',
            'email' => 'example@takanori.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('exampleexample'),
            'image_url'=>'hoge',
            'occupation' => '医者',
            'birthday' => '1992-11-30',
            'address' => '東京都',
            'hobby' => '読書',
            'girl_experiences' => '2',
            'favorite_date_place' => '学会',
            'favorite_date_time' => '昼',
            'favorite_clothes' => 'フォーマル',
            'favorite_character' => '知的',
            'favorite_feature' => '眼鏡',
            'favorite_age_range' => '20代後半〜30代前半',
            'notice' => '将来について一緒に考えたい！',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'しゅうえい',
            'email' => 'example@shuei.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('exampleexample'),
            'image_url'=>'hoge',
            'occupation' => '小売',
            'birthday' => '1992-11-30',
            'address' => '東京都練馬区',
            'hobby' => '読書',
            'girl_experiences' => '2',
            'favorite_date_place' => '歌舞伎町',
            'favorite_date_time' => '夜',
            'favorite_clothes' => 'こだわりなし',
            'favorite_character' => '話が合う',
            'favorite_feature' => '眼鏡',
            'favorite_age_range' => '20代後半〜30代前半',
            'notice' => '価値観が合うって難しいよね。',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'だいち',
            'email' => 'example@daichi.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('exampleexample'),
            'image_url'=>'hoge',
            'occupation' => '現場代理人',
            'birthday' => '1992-11-30',
            'address' => '東京都渋谷区',
            'hobby' => '読書',
            'girl_experiences' => '2',
            'favorite_date_place' => '競馬場',
            'favorite_date_time' => '夜',
            'favorite_clothes' => '現場女子',
            'favorite_character' => '寛容な人',
            'favorite_feature' => 'こだわりなし',
            'favorite_age_range' => '20代後半〜30代前半',
            'notice' => 'ギャンブラーいないかな。',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'かつのり',
            'email' => 'example@katsu.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('exampleexample'),
            'image_url'=>'hoge',
            'occupation' => '建築士',
            'birthday' => '1992-11-30',
            'address' => '東京都江東区',
            'hobby' => '読書',
            'girl_experiences' => '4',
            'favorite_date_place' => '新橋の阪急',
            'favorite_date_time' => '昼',
            'favorite_clothes' => '大阪な感じ',
            'favorite_character' => '笑いに寛容',
            'favorite_feature' => '話が合う',
            'favorite_age_range' => '20代後半〜30代前半',
            'notice' => 'お笑い芸人好きの人急募！',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'たかや',
            'email' => 'example@takaya.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('exampleexample'),
            'image_url'=>'hoge',
            'occupation' => '証券',
            'birthday' => '1992-11-30',
            'address' => '東京都新宿区',
            'hobby' => '酒の飲み比べ',
            'girl_experiences' => '5',
            'favorite_date_place' => '丸の内',
            'favorite_date_time' => '夕方',
            'favorite_clothes' => 'カジュアル',
            'favorite_character' => '知的',
            'favorite_feature' => 'スレンダー',
            'favorite_age_range' => '20代後半〜30代前半',
            'notice' => '頑張って彼女作るぞ！',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'まさひろ',
            'email' => 'example@masahiro.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('exampleexample'),
            'image_url'=>'hoge',
            'occupation' => '商社',
            'birthday' => '1992-11-30',
            'address' => '東京都台東区',
            'hobby' => '読書',
            'girl_experiences' => '3',
            'favorite_date_place' => '隅田川沿い',
            'favorite_date_time' => '昼',
            'favorite_clothes' => 'カジュアル',
            'favorite_character' => '聞き上手な人',
            'favorite_feature' => '海外好き',
            'favorite_age_range' => '20代後半〜30代前半',
            'notice' => '外国人の彼女もいいなあ。',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'name' => 'ひろき',
            'email' => 'example@hiroki.example',
            'email_verified_at' => now(),
            'password'=>Hash::make('exampleexample'),
            'image_url'=>'hoge',
            'occupation' => '飲食',
            'birthday' => '1992-11-30',
            'address' => '東京都板橋区',
            'hobby' => '筋トレ',
            'girl_experiences' => '10',
            'favorite_date_place' => '渋谷スクランブル交差点',
            'favorite_date_time' => '夜',
            'favorite_clothes' => 'ギャル',
            'favorite_character' => '明るい人',
            'favorite_feature' => '筋肉',
            'favorite_age_range' => '20代後半〜30代前半',
            'notice' => '飲み会盛り上げます！',
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        ]);
    }
}
