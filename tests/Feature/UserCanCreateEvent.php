<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserCanCreateEvent extends TestCase
{
    use RefreshDatabase;

    function test_events_can_be_viewed()
    {
        $user = $this->signIn();

        $this->e()->get('/events')
            ->assertStatus(200)
            ->assertSeeText("Events");
    }

    // function test_settings_can_be_updated()
    // {
    //     $user = $this->signIn();
    //     $response = $this->withoutExceptionHandling()->post('/settings', $attribute = [
    //         'name' => 'John Doe',
    //         'email' => 'john@example.com',
    //         'about' => 'I like to drive tractors.',
    //         'location' => 'Windsor',
    //         'club' => 'Windsor Amateur',
    //     ])->assertRedirect();

    //     $user->refresh();
    //     $this->assertEquals($attribute['name'], $user->name);
    //     $this->assertEquals($attribute['email'], $user->email);
    //     $this->assertEquals($attribute['about'], $user->about);
    // }

    // function test_name_is_required()
    // {
    //     $this->updateSettings([
    //         'name' => '',
    //     ])->assertJsonValidationErrors(['name']);
    // }

    // function test_email_is_required()
    // {
    //     $this->updateSettings([
    //         'email' => '',
    //     ])->assertJsonValidationErrors(['email']);
    // }

    // function updateSettings($attributes = [])
    // {
    //     $this->signIn();

    //     return $this->json('POST', '/settings', array_merge([
    //         'name' => 'John Doe',
    //         'email' => 'john@example.com',
    //         'about' => 'I like to drive tractors.',
    //     ], $attributes));
    // }
}
