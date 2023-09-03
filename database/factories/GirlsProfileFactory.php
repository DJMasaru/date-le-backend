<?php

namespace Database\Factories;

use App\Models\GirlsProfile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<GirlsProfile>
 */
class GirlsProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //この関数がインスタンス化される度に数値がインクリメントする
        static $id = 1;

        return [
            'id' => $id++,
            'name' => $this->faker->text(10),
            'age' => $this->faker->numberBetween(18, 40), // 18から40までのランダムな年齢
            'occupation' => $this->faker->text(10), // 職業
            'image_url' => $this->faker->imageUrl, // 画像URL
            'user_id' => 1, // ユーザーID（固定値）
            'feature_first' => $this->faker->text(5), // 最大5文字のランダムな文字列
            'feature_second' => $this->faker->text(5),
            'feature_third' => $this->faker->text(5),
            'birthday' => $this->faker->date, // 誕生日
            'address' => $this->faker->address, // 住所
            'hobby' => $this->faker->text(10), // 趣味
            'character' => $this->faker->text(10), // 性格
            'favorite_type_of_man' => $this->faker->text(10), // お気に入りの男性のタイプ
            'favorite_foods' => $this->faker->text(10), // 好きな食べ物
            'dislike_foods' => $this->faker->text(10), // 嫌いな食べ物
            'opportunity_to_meet' => $this->faker->sentence, // 出会いの機会
            'notice' => $this->faker->text(10), // 注意事項
            'has_boyfriend' => $this->faker->numberBetween(0, 2), // 彼氏の有無（真偽値）
            'count_of_dates' => $this->faker->numberBetween(0, 10), // デートの回数（0から10までのランダムな数）
        ];
    }
}
