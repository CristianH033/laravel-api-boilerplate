<?php

namespace Tests\Feature\Http\Api\Auth;

use Tests\TestCase;
use App\Models\User;
use App\Mail\VerifyEmailMail;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use App\Notifications\VerifyEmailNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VerificationControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testVerifiedUserCanNotResendVerificationNotification()
    {
        Notification::fake();

        $user = User::factory()->create([
            'email_verified_at' => now(),
            'remember_token' => null,
        ]);

        $response = $this->postJson(route('api.verification.resend'), [
            'email' => $user->email,
        ]);

        Notification::assertNotSentTo([$user], VerifyEmailNotification::class);

        $response->assertStatus(200);

        $response->assertJsonStructure(['message']);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserCanVerifyHisEmail()
    {
        Notification::fake();

        $notification = new VerifyEmailNotification();

        $user = User::factory()->create([
            'email_verified_at' => null,
            'remember_token' => null,
        ]);

        $signedURL = $notification->verificationURL($user);

        $this->assertSame(null, $user->email_verified_at);

        $response = $this->actingAs($user)->getJson($signedURL);

        $response->assertStatus(200);

        $response->assertJsonStructure(['message']);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserCanResendVerificationNotification()
    {
        Notification::fake();

        $user = User::factory()->create([
            'email_verified_at' => null,
            'remember_token' => null,
        ]);

        $response = $this->postJson(route('api.verification.resend'), [
            'email' => $user->email,
        ]);

        Notification::assertSentTo([$user], VerifyEmailNotification::class);

        $response->assertStatus(200);

        $response->assertJsonStructure(['message']);
    }
}
