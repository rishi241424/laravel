<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserRegisterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->post('/register', ['name' => 'bhaiyu', 'email' => 'bhaiyu@mailinator.com', 'password' => 'bhaiyu@mailinator.com']);
        $response->assertStatus(201);
    }
}
