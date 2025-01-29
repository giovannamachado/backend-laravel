<?php

namespace app\core\financeiro\transaction\user_case\deletar\dto;

class dto_transaction_deletar_saida {
    public function __construct(
        public bool $deletado
    ) {}
}
