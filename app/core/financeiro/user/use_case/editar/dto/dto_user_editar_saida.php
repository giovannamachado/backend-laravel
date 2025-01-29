<?php

namespace app\core\financeiro\user\use_case\editar\dto;

class dto_user_editar_saida {
    public function __construct(
        public int $id,
        public string $nome_completo,
        public int $cpf,
        public string $email,
        public string $senha,
        public string $data_cadastro
    ) {}
}
