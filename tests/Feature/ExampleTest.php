<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');
        $contact = $this->get('/contact');
        $programs = $this->get('/programs');
        $gallery = $this->get('/gallery');
        $about = $this->get('/about');
        $admission = $this->get('/admission');

        $response->assertStatus(200);
        $contact->assertStatus(200);
        $programs->assertStatus(200);
        $gallery->assertStatus(200);
        $about->assertStatus(200);
        $admission->assertStatus(200);
    }
}
