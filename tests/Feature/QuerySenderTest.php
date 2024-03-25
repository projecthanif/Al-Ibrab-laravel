<?php

namespace Tests\Feature;

use Tests\TestCase;

class QuerySenderTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }

    public function test_email_sent_successfully(): void
    {
        $response = $this->post('/contact/mail');
        $response->ddSession();
        $response->assertStatus(302);
    }
}
