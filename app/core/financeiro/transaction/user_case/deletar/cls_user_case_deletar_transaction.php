<?php

namespace app\core\financeiro\transaction\user_case\deletar;

use app\core\financeiro\transaction\resource\interface\int_resource_transaction;

class cls_user_case_deletar_transaction {
    public function __construct(private int_resource_transaction $resource_transaction) {}

    public function executar($id) {
        $transaction = $this->resource_transaction->buscar_por_id($id);

        if (!$transaction) {
            return [
                'status' => 'error',
                'message' => 'Transação não encontrada.'
            ];
        }

        $resultado = $this->resource_transaction->excluir_por_id($id);

        if ($resultado) {
            return [
                'status' => 'success',
                'message' => 'Transação removida com sucesso.'
            ];
        }

        return [
            'status' => 'error',
            'message' => 'Erro ao remover a transação.'
        ];
    }
}
