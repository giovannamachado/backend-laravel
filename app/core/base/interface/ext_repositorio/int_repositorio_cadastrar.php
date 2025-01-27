<?php namespace app\core\base\interface\ext_repositorio;

use App\core\base\interface\int_entidade;

interface int_repositorio_cadastrar{
    public function criar(int_entidade $entidade):?int_entidade;
}
