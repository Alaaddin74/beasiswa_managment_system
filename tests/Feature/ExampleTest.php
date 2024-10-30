<?php

use function Pest\Laravel\get;

it('has a login page')
    ->get('/login') // Send a GET request to the login route
    ->assertStatus(200); // Assert that the status code is 200 (OK)
