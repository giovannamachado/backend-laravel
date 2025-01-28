<?php

namespace app\core\financeiro\resource\interface;


interface int_resource_category {
    public function criar(array $dados);
    public function atualizar($id, array $dados);
    public function listar();
    public function buscar_por_id($id);
    public function excluir_por_id($id);
}