<?php

namespace app\core\financeiro\category\user_case\cadastrar;

use app\core\category\Entities\cls_category;
use app\core\financeiro\category\user_case\cadastrar\dto\dto_category_cadastrar_entrada;
use app\core\financeiro\category\user_case\cadastrar\dto\dto_category_cadastrar_saida;
use app\core\financeiro\resource\interface\int_resource_financeiro;

class cls_user_case_cadastrar_category {
    public function __construct(private int_resource_financeiro $resource_category) {
        
    }

    private function de_entidade_para_dto($entidade): dto_category_cadastrar_saida {
        return new dto_category_cadastrar_saida ($entidade->id(), $entidade->nome_category());
    }

    private function de_dto_para_entidade($dto_entrada): cls_category {
        return new cls_category(
            "", 
            $dto_entrada->nome_category,
        );
    }

    public function execute(dto_category_cadastrar_entrada $dto_entrada): dto_category_cadastrar_saida {

        $entidade = $this->de_dto_para_entidade($dto_entrada);
        
        return $this->de_entidade_para_dto($this->resource_category->criar($entidade));
    }
}
