<?php

namespace Tests\Feature;

use App\Models\GirlsProfile;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DateJobControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_fetchGirlsList(): void
    {
        $user = User::factory()->create();

        GirlsProfile::factory()->times(10)->create();

        $response = $this->actingAs($user)->get('/api/girls_list');

        $response->assertStatus(200);

        $data = $response->json();

        // JSONデータの構造や内容をアサーション
        $this->assertIsArray($data); // データが配列であることを確認
    }

    public function test_makeDateJob()
    {
        $user = User::factory()->create();

        $girlsProfile = GirlsProfile::factory()->times(10)->create();
        $girlsProfileFirst = $girlsProfile[1]['name'];
        Log::debug($girlsProfileFirst);
        $params = [
            'girlsNameConfirm'     => $girlsProfileFirst,
            'dateOfDate'    => '2023-07-23',
            'timeOfDate' => '18:00:00',
            'placeOfDate' => '六本木。',
            'passion' => '頑張ります。',
            'target' => '付き合う。',
        ];

        $response = $this->actingAs($user)->post('/api/make_date_job',$params);


    }
}
