<?php

namespace app\core\financeiro\user\use_case\cadastrar;

use app\core\financeiro\user\resource\ResourceUser;
use app\core\financeiro\user\use_case\cadastrar\dto\dto_user_cadastrar__entrada;
use app\core\financeiro\user\use_case\cadastrar\dto\dto_user_cadastrar_saida;

class cls_use_case_cadastrar_user {
    private ResourceUser $repository;

    public function __construct(ResourceUser $repository) {
        $this->repository = $repository;
    }

    public function handle(dto_user_cadastrar__entrada $entrada): dto_user_cadastrar_saida {
        $user = $this->repository->criar([
            'nome' => $entrada->nome_completo,
            'cpf' => $entrada->cpf,
            'email' => $entrada->email,
            'senha' => bcrypt($entrada->senha), 
            'data_cadastro' => now(),
        ]);

        
        return new dto_user_cadastrar_saida(
            nome_completo: $user['nome_completo'],
            cpf: $user['cpf'],
            email: $user['email'],
            senha: $user['senha'],
            data_cadastro: $user['data_cadastro']
        );
    }
}
