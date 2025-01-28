<?php

namespace app\core\financeiro\transaction\user_case\cadastrar\dto;

class dto_transaction_cadastrar_saida {
    public function __construct(
        public int $id,
        public int $user_id,
        public string $tipo,
        public float $valor,
        public int $category_id
    ) {}
}
