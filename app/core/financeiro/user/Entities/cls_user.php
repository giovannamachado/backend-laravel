<?php
namespace app\core\financeiro\user\Entities;

class cls_user {
    private int $id;
    private string $nome_completo;
    private int $cpf;
    private string $email;
    private string $senha;
    private string $data_cadastro;

    public function __construct(int $id, string $nome_completo, int $cpf, string $email, string $senha, string $data_cadastro) {
        $this->id = $id;
        $this->nome_completo = $nome_completo;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
        $this->data_cadastro = $data_cadastro;
    }

    public function id() {
        return $this->id;
    }

    public function nome_completo() {
        return $this->nome_completo;
    }

    public function cpf() {
        return $this->cpf;
    }

    public function email() {
        return $this->email;
    }

    public function senha() {
        return $this->senha;
    }

    public function data_cadastro() {
        return $this->data_cadastro;
    }


    public function atualizarInformacoes(string $nome_completo, int $cpf, string $email, string $senha) {
        $this->nome_completo = $nome_completo;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
    }
}
