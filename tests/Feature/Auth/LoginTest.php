<?php

namespace Tests\Feature\Auth;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase; // runs migrations

    public function testUserCanViewLoginForm()
    {
        $response = $this->get('login');

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    public function testUserCannotViewLoginFormWhenAuthenticated()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)->get('login');

        $response->assertRedirect('/home');
    }

    public function testUserCanLoginWithCorrectCredentials()
    {
        $user = factory(User::class)->create([
            'password' => bcrypt($password = 'i-love-laravel'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);
    }
}
