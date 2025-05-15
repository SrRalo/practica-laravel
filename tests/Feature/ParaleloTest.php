<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ParaleloTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $data = [
            'nombre' => 'Paralelo 1',
            'seccion' => 'A',
        ];
        $response = $this->postJson('/api/paralelos', $data);
        $response->assertStatus(201);
    }
}
