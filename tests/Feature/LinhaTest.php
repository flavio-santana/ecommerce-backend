<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Model\Linha;

class LinhaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLinhaIndex()
    {
        //$response = $this->get('/');
        $response = $this->get('/api/linhas');
        $response->assertStatus(200);

        //$this->json('GET', 'api/linhas', ['Accept' => 'application/json'])->assertStatus(200);

        //$response = $this->call('GET', '/api/linhas');

        //$response->assertStatus(200);
    }
}