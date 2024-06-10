<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonaTest extends TestCase
{
    /** @test */
    public function it_can_fetch_all_personas()
    {
        $response = $this->get('/api/v2/personas');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => ['id', 'nombre', 'documento']
        ]);
    }
}
