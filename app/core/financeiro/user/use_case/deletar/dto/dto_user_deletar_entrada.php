<?php

namespace app\core\financeiro\user\use_case\deletar\dto;

class dto_user_deletar_entrada {
    public function __construct(
        public int $user_id
    ) {}
}
