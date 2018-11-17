<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    function signIn($guard = null)
    {
        $user = factory('App\User')->create();

        $this->actingAs($user, $guard);

        return $user;
    }

    function e()
    {
        return $this->withoutExceptionHandling();
    }
}
