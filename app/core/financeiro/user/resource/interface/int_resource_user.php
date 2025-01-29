<?php

namespace app\core\financeiro\user\resource\interface;

use App\core\usuario\entidade\cls_user;

interface int_resource_user {
    public function criar(array $dados): array;
    public function buscar_por_id($id): array|null;
    public function excluir_por_id($id): bool;
    public function atualizar(cls_user $user);
}
