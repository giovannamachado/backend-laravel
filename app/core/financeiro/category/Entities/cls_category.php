<?php
namespace app\core\category\Entities;

class cls_category {
    private string $id;
    private string $nome_category;

    
    public function __construct(string $id, string $nome_category) {
        $this->id = $id;
        $this->nome_category = $nome_category;

    }

    
    public function id(): string {
        return $this->id;
    }

    public function nome_category(): string {
        return $this->nome_category;
    }


    // Método para verificar a validade da categoria (exemplo de lógica de negócios)
    public function validar(): bool {
        return !empty($this->nome_category);
    }

    
}
