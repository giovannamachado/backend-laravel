<?php

namespace app\core\financeiro\transaction\user_case\deletar;

use app\core\financeiro\transaction\resource\ResourceTransaction;
use app\core\financeiro\transaction\user_case\deletar\dto\dto_transaction_deletar_entrada;
use app\core\financeiro\transaction\user_case\deletar\dto\dto_transaction_deletar_saida;

class cls_user_case_deletar_transaction {
    private ResourceTransaction $transactionResource;

    public function __construct(ResourceTransaction $transactionResource) {
        $this->transactionResource = $transactionResource;
    }

    public function deletarTransaction(dto_transaction_deletar_entrada $dados): dto_transaction_deletar_saida{
        $transacao = $this->transactionResource->buscar_por_id($dados->transaction_id);

        if (!$transacao) {
            throw new \Exception('Transação não encontrada');
        }

        $deletado = $this->transactionResource->excluir_por_id($dados->transaction_id);

        return new dto_transaction_deletar_saida($deletado);
    }
}
