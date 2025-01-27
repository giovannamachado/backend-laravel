<?php namespace app\core\base\interface\ext_repositorio;

use App\core\base\interface\int_entidade;

interface int_repositorio_buscar_por_id {
    public function buscar_por_id($id):?int_entidade;
}
