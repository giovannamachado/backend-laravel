<?php

namespace app\core\financeiro\user\use_case\deletar;

use app\core\financeiro\user\use_case\deletar\dto\dto_user_deletar_entrada;
use app\core\financeiro\user\use_case\deletar\dto\dto_user_deletar_saida;
use app\core\financeiro\transaction\resource\ResourceTransaction;
use app\core\financeiro\user\resource\ResourceUser;

class cls_user_case_deletar_user {
    private ResourceUser $userResource;
    private ResourceTransaction $transactionResource;

    public function __construct(ResourceUser $userResource, ResourceTransaction $transactionResource) {
        $this->userResource = $userResource;
        $this->transactionResource = $transactionResource;
    }

    public function deletarUsuario(dto_user_deletar_entrada $dados): dto_user_deletar_saida {
        $user = $this->userResource->buscar_por_id($dados->user_id);

        if (!$user) {
            throw new \Exception('Usuário não encontrado');
        }

        
        $transacoes = $this->transactionResource->buscar_por_id($dados->user_id);
        
        
        if ($transacoes->count() > 0) {
            throw new \Exception('Usuário não pode ser deletado pois possui transações associadas.');
        }

        $deletado = $this->userResource->excluir_por_id($dados->user_id);

        return new dto_user_deletar_saida($deletado);
    }
}
