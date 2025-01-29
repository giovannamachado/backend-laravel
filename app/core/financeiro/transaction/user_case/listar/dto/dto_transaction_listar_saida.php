<?php

namespace app\core\financeiro\transaction\user_case\listar\dto;

class dto_transaction_listar_saida {
    public array $transactions;

    public function __construct(array $transactions) {
        $this->transactions = $transactions;
    }
}
