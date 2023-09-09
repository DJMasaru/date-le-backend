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
            'name' => '京子',
            'age' => 22,
            'occupation' => '化粧品会社',
            'image_url'=> 'hogehoge',
            'user_id' => 1,
            'feature_first'=>'綺麗め',
            'feature_second' =>'ノリ良し',
            'feature_third' =>'仕事人',
            'birthday'=>'2001-07-04',
            'address'=>'神奈川県川崎市',
            'hobby'=>'お菓子作り',
            'character'=>'明るい',
            'favorite_type_of_man'=>'前向きな人',
            'favorite_foods'=>'パン',
            'dislike_foods'=>'トマト',
            'opportunity_to_meet'=>'バーで知り合った',
            'notice'=>'上品な雰囲気で話も弾む。',
            'has_boyfriend'=>false,
            'count_of_dates'=>2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'れいな',
            'age' => 22,
            'occupation' => '不動産営業',
            'image_url'=> 'hogehoge',
            'user_id' => 1,
            'feature_first'=>'黒髪',
            'feature_second' =>'韓流',
            'feature_third' =>'聞き上手',
            'birthday'=>'2001-07-04',
            'address'=>'東京都北区',
            'hobby'=>'語学',
            'character'=>'丁寧',
            'favorite_type_of_man'=>'筋肉質',
            'favorite_foods'=>'フィナンシェ',
            'dislike_foods'=>'ナス',
            'opportunity_to_meet'=>'交流会で知り合った',
            'notice'=>'話し方が丁寧で落ち着く。',
            'has_boyfriend'=>false,
            'count_of_dates'=>2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'あやか',
            'age' => 22,
            'occupation' => '公務員',
            'image_url'=> 'hogehoge',
            'user_id' => 1,
            'feature_first'=>'カメラ女子',
            'feature_second' =>'理系',
            'feature_third' =>'酒豪',
            'birthday'=>'2001-07-04',
            'address'=>'東京都葛飾区',
            'hobby'=>'登山',
            'character'=>'和を大切にする',
            'favorite_type_of_man'=>'価値観が似てる人',
            'favorite_foods'=>'カレー',
            'dislike_foods'=>'キュウリ',
            'opportunity_to_meet'=>'上野の居酒屋で知り合った',
            'notice'=>'真面目だけど面白い。',
            'has_boyfriend'=>false,
            'count_of_dates'=>2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'ちほ',
            'age' => 22,
            'occupation' => '美容師',
            'image_url'=> 'hogehoge',
            'user_id' => 1,
            'feature_first'=>'ピンク髪',
            'feature_second' =>'ガーリー',
            'feature_third' =>'ジャニ系',
            'birthday'=>'2001-07-04',
            'address'=>'東京都新宿区',
            'hobby'=>'推し活',
            'character'=>'ユニーク',
            'favorite_type_of_man'=>'王子様みたいな人',
            'favorite_foods'=>'ケーキ',
            'dislike_foods'=>'ピーマン',
            'opportunity_to_meet'=>'美容院で知り合った',
            'notice'=>'世界観が面白い。',
            'has_boyfriend'=>false,
            'count_of_dates'=>2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'あすか',
            'age' => 22,
            'occupation' => '都市銀行',
            'image_url'=> 'hogehoge',
            'user_id' => 2,
            'feature_first'=>'丸顔',
            'feature_second' =>'国立文系卒',
            'feature_third' =>'旅行好き',
            'birthday'=>'2001-07-04',
            'address'=>'東京都港区',
            'hobby'=>'ホカンス',
            'character'=>'社交的',
            'favorite_type_of_man'=>'刺激的な人',
            'favorite_foods'=>'タイ料理',
            'dislike_foods'=>'チョコレート',
            'opportunity_to_meet'=>'就職活動時に知り合った',
            'notice'=>'海外志向で明るい。',
            'has_boyfriend'=>false,
            'count_of_dates'=>2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'さりな',
            'age' => 22,
            'occupation' => '看護師',
            'image_url'=> 'hogehoge',
            'user_id' => 3,
            'feature_first'=>'清楚系',
            'feature_second' =>'メガネ女子',
            'feature_third' =>'細身',
            'birthday'=>'2001-07-04',
            'address'=>'東京都目黒区',
            'hobby'=>'旅行',
            'character'=>'優しい',
            'favorite_type_of_man'=>'静かな人',
            'favorite_foods'=>'焼肉',
            'dislike_foods'=>'魚介類',
            'opportunity_to_meet'=>'友達の紹介',
            'notice'=>'白衣が似合いそう。',
            'has_boyfriend'=>false,
            'count_of_dates'=>2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'ひかり',
            'age' => 22,
            'occupation' => 'CA',
            'image_url'=> 'hogehoge',
            'user_id' => 4,
            'feature_first'=>'英語堪能',
            'feature_second' =>'帰国子女',
            'feature_third' =>'洋楽好き',
            'birthday'=>'2001-07-04',
            'address'=>'東京都大田区',
            'hobby'=>'旅行',
            'character'=>'社交的',
            'favorite_type_of_man'=>'趣味が合う人',
            'favorite_foods'=>'ハンバーグ',
            'dislike_foods'=>'甲殻類',
            'opportunity_to_meet'=>'合コンで知り合った',
            'notice'=>'まさにCAらしい雰囲気。',
            'has_boyfriend'=>false,
            'count_of_dates'=>2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'まい',
            'age' => 22,
            'occupation' => '医療機器メーカー',
            'image_url'=> 'hogehoge',
            'user_id' => 5,
            'feature_first'=>'モンクレ',
            'feature_second' =>'ジム通い',
            'feature_third' =>'健康志向',
            'birthday'=>'2001-07-04',
            'address'=>'東京都渋谷区',
            'hobby'=>'散歩',
            'character'=>'さっぱり',
            'favorite_type_of_man'=>'仕事頑張ってる人',
            'favorite_foods'=>'アボカド',
            'dislike_foods'=>'納豆',
            'opportunity_to_meet'=>'道で話しかけた。',
            'notice'=>'ストイックに頑張ってる。',
            'has_boyfriend'=>false,
            'count_of_dates'=>2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'あやな',
            'age' => 22,
            'occupation' => '証券会社',
            'image_url'=> 'hogehoge',
            'user_id' => 6,
            'feature_first'=>'清楚系',
            'feature_second' =>'おっとり',
            'feature_third' =>'黒髪',
            'birthday'=>'2001-07-04',
            'address'=>'東京都中央区',
            'hobby'=>'投資信託',
            'character'=>'実は気が強い',
            'favorite_type_of_man'=>'同じ金融系',
            'favorite_foods'=>'韓国グルメ',
            'dislike_foods'=>'わさび',
            'opportunity_to_meet'=>'合コンで会った。',
            'notice'=>'責任感が強い。',
            'has_boyfriend'=>false,
            'count_of_dates'=>2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'ゆか',
            'age' => 22,
            'occupation' => '広告代理店',
            'image_url'=> 'hogehoge',
            'user_id' => 7,
            'feature_first'=>'地方出身',
            'feature_second' =>'地元ラブ',
            'feature_third' =>'元気',
            'birthday'=>'2001-07-04',
            'address'=>'東京都江東区',
            'hobby'=>'シーシャ',
            'character'=>'前向き',
            'favorite_type_of_man'=>'元気な人',
            'favorite_foods'=>'吉備団子',
            'dislike_foods'=>'みかん',
            'opportunity_to_meet'=>'ルーフトップバーで知り合った。',
            'notice'=>'方言がとても似合う。',
            'has_boyfriend'=>false,
            'count_of_dates'=>2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'ももこ',
            'age' => 22,
            'occupation' => '人材',
            'image_url'=> 'hogehoge',
            'user_id' => 8,
            'feature_first'=>'体育会系',
            'feature_second' =>'実は関西人',
            'feature_third' =>'バリキャリ',
            'birthday'=>'2001-07-04',
            'address'=>'東京都品川区',
            'hobby'=>'チアリーディング',
            'character'=>'独特な雰囲気',
            'favorite_type_of_man'=>'包容力のある人',
            'favorite_foods'=>'四川料理',
            'dislike_foods'=>'甘いもの',
            'opportunity_to_meet'=>'大学の後輩',
            'notice'=>'連絡するとすぐ返事をくれる。',
            'has_boyfriend'=>false,
            'count_of_dates'=>2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'みなみ',
            'age' => 22,
            'occupation' => '女医',
            'image_url'=> 'hogehoge',
            'user_id' => 2,
            'feature_first'=>'エリート',
            'feature_second' =>'努力家',
            'feature_third' =>'クラバー',
            'birthday'=>'2001-07-04',
            'address'=>'神奈川県横浜市',
            'hobby'=>'ヨガ',
            'character'=>'面白い',
            'favorite_type_of_man'=>'年収が同じ',
            'favorite_foods'=>'カツ丼',
            'dislike_foods'=>'えび',
            'opportunity_to_meet'=>'クラブで知り合った',
            'notice'=>'元気いっぱいで面白い。',
            'has_boyfriend'=>false,
            'count_of_dates'=>2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'あやめ',
            'age' => 22,
            'occupation' => 'ネイリスト',
            'image_url'=> 'hogehoge',
            'user_id' => 3,
            'feature_first'=>'黒髪ロング',
            'feature_second' =>'美意識高い',
            'feature_third' =>'出張多め',
            'birthday'=>'2001-07-04',
            'address'=>'東京都台東区',
            'hobby'=>'筋トレ',
            'character'=>'天心卵麺',
            'favorite_type_of_man'=>'引っ張ってくれる人',
            'favorite_foods'=>'ラーメン',
            'dislike_foods'=>'トマト',
            'opportunity_to_meet'=>'友達の友達',
            'notice'=>'トレーニー女子。',
            'has_boyfriend'=>false,
            'count_of_dates'=>2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'みゆ',
            'age' => 22,
            'occupation' => '保険外交員',
            'image_url'=> 'hogehoge',
            'user_id' => 4,
            'feature_first'=>'ノリが良い',
            'feature_second' =>'芯がある',
            'feature_third' =>'頭がいい',
            'birthday'=>'2001-07-04',
            'address'=>'東京都練馬区',
            'hobby'=>'シーシャ',
            'character'=>'寛容',
            'favorite_type_of_man'=>'男らしい人',
            'favorite_foods'=>'スタバの新作',
            'dislike_foods'=>'エスニック料理',
            'opportunity_to_meet'=>'フェスで仲良くなった',
            'notice'=>'話が弾む。',
            'has_boyfriend'=>false,
            'count_of_dates'=>2,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
                'name' => 'えり',
                'age' => 22,
                'occupation' => 'マスコミ',
                'image_url'=> 'hogehoge',
                'user_id' => 5,
                'feature_first'=>'ショート',
                'feature_second' =>'綺麗好き',
                'feature_third' =>'良家',
                'birthday'=>'2001-07-04',
                'address'=>'東京都板橋区',
                'hobby'=>'カフェ巡り',
                'character'=>'ゆるふわ',
                'favorite_type_of_man'=>'一緒に趣味を楽しめる人',
                'favorite_foods'=>'スコーン',
                'dislike_foods'=>'辛いもの',
                'opportunity_to_meet'=>'マッチングアプリ',
                'notice'=>'雰囲気がいい。',
                'has_boyfriend'=>false,
                'count_of_dates'=>2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ゆりこ',
                'age' => 23,
                'occupation' => '楽器量販店',
                'image_url'=> 'hogehoge',
                'user_id' => 6,
                'feature_first'=>'音楽好き',
                'feature_second' =>'上昇志向',
                'feature_third' =>'明るい',
                'birthday'=>'2001-07-04',
                'address'=>'東京都世田谷区',
                'hobby'=>'御朱印巡り',
                'character'=>'面白い',
                'favorite_type_of_man'=>'博学な人',
                'favorite_foods'=>'うどん',
                'dislike_foods'=>'ラーメン',
                'opportunity_to_meet'=>'友達の紹介',
                'notice'=>'ご飯の話題が尽きない。',
                'has_boyfriend'=>false,
                'count_of_dates'=>2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
