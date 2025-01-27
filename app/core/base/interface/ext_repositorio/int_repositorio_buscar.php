<?php namespace app\core\base\interface\ext_repositorio;

interface int_repositorio_buscar {
    public function buscar(array $filtro=[]):array;
}
