<?php 

namespace app\core\financeiro\category\user_case\cadastrar\dto;


class dto_category_cadastrar_saida{
    public function __construct(public string $nome_categoria, public int $id_categoria){
    }
}