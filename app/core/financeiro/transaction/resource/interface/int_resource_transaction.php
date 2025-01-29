<?php

namespace app\core\financeiro\transaction\resource\interface;

use app\core\financeiro\transaction\user_case\cadastrar\cls_user_case_cadastrar_transaction;

interface int_resource_transaction {
    public function criar(array $dados): array;
    public function excluir_por_id($id): bool;
    public function buscar_por_id($id): array|null;
    public function findAll(): array;
    public function findByUser(int $userId): array;
    public function findByCategory(int $categoryId): array;
    public function findByType(string $type): array;
}
