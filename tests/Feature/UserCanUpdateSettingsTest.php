<?php
namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
class UserCanUpdateSettingsTest extends TestCase
{
    use RefreshDatabase;

    function test_settings_can_be_viewed()
    {
        $this->signIn();
        $this->get('/settings')->assertStatus(200);
    }

    function test_settings_can_be_updated()
    {
        $user = $this->signIn();
        $response = $this->withoutExceptionHandling()->post('/settings', $attribute = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'about' => 'I like to drive tractors.',
        ])->assertRedirect();
        $user->refresh();
        $this->assertEquals($attribute['name'], $user->name);
        $this->assertEquals($attribute['email'], $user->email);
        $this->assertEquals($attribute['about'], $user->about);
    }

    function update($attributes = [])
    {
        $this->signIn();
        return $this->json('POST', '/settings', array_merge([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'about' => 'I like to drive tractors.',
        ], $attributes));
    }

    function test_name_is_required()
    {
        $this->update([
            'name' => '',
        ])->assertJsonValidationErrors(['name']);
    }

    function test_email_is_required()
    {
        $this->update([
            'email' => '',
        ])->assertJsonValidationErrors(['email']);
    }
}
