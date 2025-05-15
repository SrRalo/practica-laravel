<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EstudianteTest extends TestCase
{
    use RefreshDatabase;

    public function test_example(): void
    {
        $data = [
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
        ];
        $response = $this->postJson('/api/estudiantes', $data);
        $response->assertStatus(201);
    }
}
