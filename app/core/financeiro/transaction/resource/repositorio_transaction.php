<?php

namespace app\core\financeiro\resource;

use app\core\financeiro\resource\interface\int_resource_transaction;
use App\Models\Transaction;

class ResourceTransaction implements int_resource_transaction {
    public function criar(array $dados): array {
        $transaction = Transaction::create($dados);
        return $transaction->toArray();
    }
}
