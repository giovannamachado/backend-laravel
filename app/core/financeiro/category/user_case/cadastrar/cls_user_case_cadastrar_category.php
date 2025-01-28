<?php

namespace app\core\financeiro\category\user_case\cadastrar;

use app\core\category\Entities\cls_category;
use app\core\financeiro\category\user_case\cadastrar\dto\dto_category_cadastrar_entrada;
use app\core\financeiro\category\user_case\cadastrar\dto\dto_category_cadastrar_saida;
use app\core\financeiro\category\resource\interface\int_resource_category;

class cls_user_case_cadastrar_category {
    public function __construct(private int_resource_category $resource_category) {}

    
    private function de_entidade_para_dto($entidade): dto_category_cadastrar_saida {
        return new dto_category_cadastrar_saida($entidade['id'], $entidade['nome_category']);
    }

    
    private function de_dto_para_array($dto_entrada): array {
        return [
            'id' => '', 
            'nome_category' => $dto_entrada->nome_category,
        ];
    }

    
    public function execute(dto_category_cadastrar_entrada $dto_entrada): dto_category_cadastrar_saida {

        $dados = $this->de_dto_para_array($dto_entrada);

        
        $resultado = $this->resource_category->criar($dados);

        return $this->de_entidade_para_dto($resultado);
    }
}
