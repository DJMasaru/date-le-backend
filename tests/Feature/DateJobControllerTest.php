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
}
