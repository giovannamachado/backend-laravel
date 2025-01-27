<?php 

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use app\core\financeiro\resource\interface\int_resource_financeiro;
use app\core\financeiro\category\user_case\cadastrar\dto\dto_category_cadastrar_entrada;
use app\core\financeiro\category\user_case\cadastrar\dto\dto_category_cadastrar_saida;
use app\core\category\Entities\cls_category;
use app\core\financeiro\category\user_case\cadastrar\cls_user_case_cadastrar_category;

class CategoryCadastrarTest extends TestCase
{
    public function testCategoryCadastro()
    {
 
        $mockResource = $this->createMock(int_resource_financeiro::class);


        $mockResource->method('criar')
            ->willReturn(new cls_category('1', 'Nova Categoria'));


        $useCase = new cls_user_case_cadastrar_category($mockResource);
  
        $dtoEntrada = new dto_category_cadastrar_entrada('Nova Categoria', 1);


        $dtoSaida = $useCase->execute($dtoEntrada);

        
        $this->assertEquals('1', $dtoSaida->id_categoria);  
        $this->assertEquals('Nova Categoria', $dtoSaida->nome_categoria);  
    }
}
