<?php

namespace app\core\financeiro\transaction\user_case\cadastrar\dto;

class dto_transaction_cadastrar_entrada {
    public function __construct(
        public int $user_id,
        public string $tipo,
        public float $valor,
        public int $category_id
    ) {}
}
