<?php namespace app\core\base\interface\ext_repositorio;

use App\core\base\interface\int_entidade;

interface int_repositorio_atualizar{
    public function atualizar(int_entidade $entidade):?int_entidade;
}
