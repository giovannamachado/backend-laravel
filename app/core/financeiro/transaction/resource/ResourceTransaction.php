<?php

namespace app\core\financeiro\transaction\resource;

use app\core\financeiro\transaction\resource\interface\int_resource_transaction;
use App\Models\Transaction;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class ResourceTransaction implements int_resource_transaction {
    private array $transactions = [];

    public function criar(array $dados): array {
        return Transaction::create($dados);
    }

    public function excluir_por_id($id): bool {
        $transaction = Transaction::find($id);

        if ($transaction) {
            return $transaction->delete();
        }

        return false;
    }

    public function buscar_por_id($id): array|null {
        return Transaction::find($id);
    }

    public function findAll(): array {
        return $this->transactions;
    }

    public function newQuery(): Builder
    {
        return DB::table('transactions');
    }

    public function findByUser(int $userId): array {
    
        return Transaction::where('user_id', $userId)->get()->toArray();
    }

    public function findByCategory(int $categoryId): array {

        return Transaction::where('category_id', $categoryId)->get()->toArray();
    }

    public function findByType(string $type): array {

        return Transaction::where('tipo', $type)->get()->toArray();
    }

    public function filter(array $filters): array {
    
        $query = $this->newQuery();  

        if (!empty($filters['user_id'])) {
            $query->where('user_id', $filters['user_id']);
        }

        if (!empty($filters['category_id'])) {
            $query->where('category_id', $filters['category_id']);
        }

        if (!empty($filters['tipo'])) {
            $query->where('tipo', $filters['tipo']);
        }

        return $query->get()->toArray();  
    }
}
