<?php

namespace app\core\financeiro\transaction\resource\interface;

interface int_resource_transaction {
    public function criar(array $dados): array;
    public function buscar_por_id($id);
    public function excluir_por_id($id): bool;
}
