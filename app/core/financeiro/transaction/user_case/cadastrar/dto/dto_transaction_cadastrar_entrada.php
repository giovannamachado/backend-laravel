<?php

namespace app\core\financeiro\transaction\user_case\cadastrar\dto;

class dto_transaction_cadastrar_entrada {
    public function __construct(
        public string $nome_completo,
        public string $cpf,
        public string $email,
        public string $senha
    ) {}
}
