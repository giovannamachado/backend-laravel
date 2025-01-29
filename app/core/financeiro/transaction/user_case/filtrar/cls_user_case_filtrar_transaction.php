<?php

namespace app\core\financeiro\transaction\user_case\filtrar;

use app\core\financeiro\transaction\resource\ResourceTransaction;
use app\core\financeiro\transaction\user_case\filtrar\dto\dto_transaction_filtrar_entrada;
use app\core\financeiro\transaction\user_case\filtrar\dto\dto_transaction_filtrar_saida;

class cls_user_case_filtrar_transaction {
    private ResourceTransaction $transactionResource;

    public function __construct(ResourceTransaction $transactionResource) {
        $this->transactionResource = $transactionResource;
    }

    public function filtrarTransactions(dto_transaction_filtrar_entrada $dados): dto_transaction_filtrar_saida {
        $query = $this->transactionResource->newQuery();

        if ($dados->user_id) {
            $query->where('user_id', $dados->user_id);
        }

        if ($dados->category_id) {
            $query->where('category_id', $dados->category_id);
        }

        if ($dados->tipo) {
            $query->where('tipo', $dados->tipo);
        }

        $transacoes = $query->get()->toArray();

        return new dto_transaction_filtrar_saida($transacoes);
    }
}
