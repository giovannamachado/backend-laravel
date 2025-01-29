<?php

namespace app\core\financeiro\transaction\user_case\listar;

use app\core\financeiro\transaction\resource\ResourceTransaction;
use app\core\financeiro\transaction\user_case\listar\dto\dto_transaction_listar_saida;

class cls_user_case_listar_transaction {
    private ResourceTransaction $transactionResource;

    public function __construct(ResourceTransaction $transactionResource) {
        $this->transactionResource = $transactionResource;
    }

    public function listarTransactions(): dto_transaction_listar_saida {
        $transacoes = $this->transactionResource->findAll();

        return new dto_transaction_listar_saida($transacoes);
    }
}
