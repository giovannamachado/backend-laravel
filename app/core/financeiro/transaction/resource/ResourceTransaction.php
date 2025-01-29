<?php

namespace app\core\financeiro\transaction\resource;

use app\core\financeiro\transaction\resource\interface\int_resource_transaction;
use App\Models\Transaction;

class ResourceTransaction implements int_resource_transaction {
    public function criar(array $dados): array {
        $transaction = Transaction::create($dados);
        return $transaction->toArray();
    }
    public function buscar_por_id($id) {
        return Transaction::find($id);
        
    }
    public function excluir_por_id($id): bool {
        $transaction = Transaction::find($id);

        if ($transaction) {
            return $transaction->delete();
        }

        return false;
    }
}
