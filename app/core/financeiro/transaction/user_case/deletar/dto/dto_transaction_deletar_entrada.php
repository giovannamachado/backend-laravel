<?php

namespace app\core\financeiro\transaction\user_case\deletar\dto;

class dto_transaction_deletar_entrada {
    public function __construct(
        public int $transaction_id,
        public int $user_id
    ) {}
}
