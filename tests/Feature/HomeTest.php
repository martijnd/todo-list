<?php

use App\User;

it('redirects unauthenticated users to /login', function () {
    $response = $this->get('/home');

    $response->assertStatus(302);
});

it('shows home page for logged in users', function () {
    $user = factory(User::class)->create();
    $response = $this->actingAs($user)->get('/home');

    $response->assertStatus(200);
    $response->assertSee('You are logged in!');
});
