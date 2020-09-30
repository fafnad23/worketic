<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Event;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_auth_routes(){
        ob_end_flush();
        Event::fake();
        $this->withExceptionHandling();
        $this->get('admin/article/categories')->assertStatus(503);
    }
}
