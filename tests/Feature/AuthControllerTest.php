<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * 新規登録を行うとき。
     *
     * @return void
     */
    public function test_register(): void
    {
        $params = [
            'name'     => 'test-name',
            'email'    => 'test@valid-email.com',
            'password' => 'test-password',
        ];

        //確認画面に遷移する前に既に登録されているメールアドレスか確認する
        $signupDuplicateResponse = $this->post('/api/email_validate', $params);
        $signupDuplicateResponse
            ->assertStatus(200)
            ->assertJson([ 'message' => 'non-duplicated' ]);

        $signupResponse = $this->post('/api/register', $params);
        $responseData = $signupResponse->json();

        $this->assertArrayHasKey('access_token', $responseData);
        $this->assertArrayHasKey('token_type', $responseData);
    }

    /**
     * 登録済みのユーザーがログインするとき。
     *
     * この関数では新規登録をわせ、その後ログインさせる挙動となっている。
     *
     * @return void
     */
    public function test_login()
    {
        $params = [
            'name'     => 'test-name',
            'email'    => 'test@valid-email.com',
            'password' => 'test-password',
        ];

        //確認画面に遷移する前に既に登録されているメールアドレスか確認する
        $signupDuplicateResponse = $this->post('/api/email_validate', $params);
        $signupDuplicateResponse
            ->assertStatus(200)
            ->assertJson([ 'message' => 'non-duplicated' ]);

        $signupResponse = $this->post('/api/register', $params);
        $responseSignupData = $signupResponse->json();

        $this->assertArrayHasKey('access_token', $responseSignupData);
        $this->assertArrayHasKey('token_type', $responseSignupData);

        $signinResponse = $this->post('/api/login', [
            'email'    => $params['email'],
            'password' => $params['password'],
        ]);

        $responseSigninData = $signinResponse->json();

        $this->assertArrayHasKey('access_token', $responseSigninData);
        $this->assertArrayHasKey('token_type', $responseSigninData);
    }

    /**
     * 新たに登録するユーザーのメールアドレスが既に登録されているユーザーと同じとき、レスポンスとして「duplicated」を返す。
     *
     * @return void
     */
    public function test_emailValidate()
    {
        $firstParams = [
            'name'     => 'test-name',
            'email'    => 'test@valid-email.com',
            'password' => 'test-password',
        ];

        //確認画面に遷移する前に既に登録されているメールアドレスか確認する
        $firstSignupDuplicateResponse = $this->post('/api/email_validate', $firstParams);
        $firstSignupDuplicateResponse
            ->assertStatus(200)
            ->assertJson([ 'message' => 'non-duplicated' ]);

        $firstSignupResponse = $this->post('/api/register', $firstParams);
        $responseFirstSignupData = $firstSignupResponse->json();

        $this->assertArrayHasKey('access_token', $responseFirstSignupData);
        $this->assertArrayHasKey('token_type', $responseFirstSignupData);

        //他の人が新規登録を行う
        $secondParams = [
            'name'     => 'test-name2',
            'email'    => 'test@valid-email.com',
            'password' => 'test-password',
        ];

        //確認画面に遷移する前に既に登録されているメールアドレスか確認する
        $secondSignupDuplicateResponse = $this->post('/api/email_validate', $secondParams);
        $secondSignupDuplicateResponse
            ->assertStatus(200)
            ->assertJson([ 'message' => 'duplicated' ]);
    }
}
