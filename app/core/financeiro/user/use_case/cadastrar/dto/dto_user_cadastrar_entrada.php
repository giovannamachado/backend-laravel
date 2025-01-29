<?php

namespace app\core\financeiro\user\use_case\cadastrar\dto;

class dto_user_cadastrar_entrada {
    public function __construct(
        public string $nome_completo,
        public int $cpf,
        public string $email,
        public string $senha,
        public string $data_cadastro
    ) {}
}
