<?php

namespace app\core\financeiro\resource\interface;

interface int_resource_transaction {
    public function criar(array $dados): array;
}
