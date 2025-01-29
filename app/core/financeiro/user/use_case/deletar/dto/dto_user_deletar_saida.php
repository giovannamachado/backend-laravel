<?php

namespace app\core\financeiro\user\use_case\deletar\dto;

class dto_user_deletar_saida {
    public function __construct(
        public bool $deletado
    ) {}
}
