<?php

use App\Todo;
use App\User;

it('redirects unauthenticated users to /login', function () {
    $response = $this->get('/');

    $response->assertStatus(302);
});

it('shows index page for logged in users', function () {
    $user = factory(User::class)->create();

    $response = $this->actingAs($user)->get('/');

    $response->assertStatus(200);
    $response->assertSee($user->name);
});

it('shows a list of todos', function () {
    $user = factory(User::class)->create();
    $user->todos()->createMany(factory(Todo::class, 10)->make()->toArray());

    $response = $this->actingAs($user)->get('/');
    $response->assertStatus(200);
    $response->assertSee($user->todos()->first()->title);
});
