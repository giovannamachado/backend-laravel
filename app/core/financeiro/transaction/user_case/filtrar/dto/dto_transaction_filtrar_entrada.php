<?php

namespace app\core\financeiro\transaction\user_case\filtrar\dto;

class dto_transaction_filtrar_entrada {
    public ?int $user_id;
    public ?int $category_id;
    public ?string $tipo;

    public function __construct(?int $user_id = null, ?int $category_id = null, ?string $tipo = null) {
        $this->user_id = $user_id;
        $this->category_id = $category_id;
        $this->tipo = $tipo;
    }
}
