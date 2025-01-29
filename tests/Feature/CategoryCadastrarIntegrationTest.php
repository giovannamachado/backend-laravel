<?php
namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryCadastrarIntegrationTest extends TestCase
{
    use RefreshDatabase;  

    public function testCategoryCadastro()
    {
        
        $data = [
            'nome_category' => 'Nova Categoria',
        ];

        
        $response = $this->post('/api/categories', $data);

        
        $this->assertDatabaseHas('categories', [
            'nome_category' => 'Nova Categoria',
        ]);

        $response->assertStatus(201);
    }
}
