<?php

namespace app\core\financeiro\resource\interface;


interface int_resource_financeiro {
    public function criar($entidade);
    public function atualizar($entidade);
    public function excluir($entidade);
    public function listar();
    public function buscar_por_id($id);
}