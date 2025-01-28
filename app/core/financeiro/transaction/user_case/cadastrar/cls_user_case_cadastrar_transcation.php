<?php

namespace app\core\financeiro\transaction\user_case\cadastrar;

use app\core\financeiro\transaction\Entities\cls_transaction;
use app\core\financeiro\transaction\user_case\cadastrar\dto\dto_transaction_cadastrar_entrada;
use app\core\financeiro\transaction\user_case\cadastrar\dto\dto_transaction_cadastrar_saida;
use app\core\financeiro\resource\interface\int_resource_transaction;

class cls_user_case_cadastrar_transaction {
    public function __construct(private int_resource_transaction $resource_transaction) {}

    private function de_entidade_para_dto($entidade): dto_transaction_cadastrar_saida {
        return new dto_transaction_cadastrar_saida(
            $entidade['id'],
            $entidade['user_id'],
            $entidade['tipo'],
            $entidade['valor'],
            $entidade['category_id']
        );
    }

    private function de_dto_para_array($dto_entrada): array {
        return [
            'id' => '',
            'user_id' => $dto_entrada->user_id,
            'tipo' => $dto_entrada->tipo,
            'valor' => $dto_entrada->valor,
            'category_id' => $dto_entrada->category_id,
        ];
    }

    public function execute(dto_transaction_cadastrar_entrada $dto_entrada): dto_transaction_cadastrar_saida {
        $dados = $this->de_dto_para_array($dto_entrada);

        $resultado = $this->resource_transaction->criar($dados);

        return $this->de_entidade_para_dto($resultado);
    }
}
