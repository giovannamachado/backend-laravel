<?php

namespace app\core\financeiro\transaction\user_case\filtrar\dto;

class dto_transaction_filtrar_saida {
    public array $transactions;

    public function __construct(array $transactions) {
        $this->transactions = $transactions;
    }
}
