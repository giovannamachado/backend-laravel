<?php

namespace app\core\financeiro\transaction\user_case\cadastrar;

use app\core\financeiro\transaction\Entities\cls_transaction;
use app\core\financeiro\transaction\user_case\cadastrar\dto\dto_transaction_cadastrar_entrada;
use app\core\financeiro\transaction\resource\interface\int_resource_transaction;
use app\core\financeiro\transaction\resource\ResourceTransaction;
use app\core\financeiro\transaction\user_case\cadastrar\dto\dto_transaction_cadastrar_saida;
use app\Models\Transaction;

class cls_user_case_cadastrar_transaction {
    private ResourceTransaction $repository;

    public function __construct(ResourceTransaction $repository) {
        $this->repository = $repository;
    }

    public function handle(dto_transaction_cadastrar_entrada $entrada): dto_transaction_cadastrar_saida{
        $transaction = $this->repository->criar([
            'user_id' => $entrada->user_id,
            'tipo' => $entrada->tipo,
            'valor' => $entrada->valor,
            'category_id' => $entrada->category_id,
        ]);

        return new dto_transaction_cadastrar_saida(
            id: $transaction['id'],
            user_id: $transaction['user_id'],
            tipo: $transaction['tipo'],
            valor: $transaction['valor'],
            category_id: $transaction['category_id'],
            created_at: $transaction['created_at']
        );
    }
}
