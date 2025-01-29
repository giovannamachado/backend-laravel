<?php
namespace app\core\financeiro\user\use_case\editar;

use app\core\financeiro\user\resource\interface\int_resource_user;
use app\core\financeiro\user\use_case\editar\dto\dto_user_editar_saida;
use app\core\financeiro\user\use_case\editar\dto\dto_user_editar_entrada;
use app\core\usuario\entidade\cls_user;

class cls_user_case_editar_user {

    public function __construct(private int_resource_user $resource_user) {}

    private function de_entidade_para_dto($entidade): dto_user_editar_saida {
        return new dto_user_editar_saida(
            $entidade->id(),
            $entidade->nome_completo(),
            $entidade->cpf(),
            $entidade->email(),
            $entidade->senha(),
            $entidade->data_cadastro()
        );
    }

    private function de_dto_para_entidade($dto_entrada): cls_user {
        return new cls_user(
            $dto_entrada->id,
            $dto_entrada->nome_completo,
            $dto_entrada->cpf,
            $dto_entrada->email,
            $dto_entrada->senha,
            '' 
        );
    }

    public function executar(dto_user_editar_entrada $dto_entrada): dto_user_editar_saida {
        $entidade = $this->de_dto_para_entidade($dto_entrada);
        

        $userAtualizado = $this->resource_user->atualizar($entidade);
        
        return $this->de_entidade_para_dto($userAtualizado);
    }
}
