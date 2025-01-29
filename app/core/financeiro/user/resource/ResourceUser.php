<?php

namespace app\core\financeiro\user\resource;

use app\core\financeiro\user\resource\interface\int_resource_user;
use App\core\usuario\entidade\cls_user;
use app\Models\User;

class ResourceUser implements int_resource_user {
    public function criar(array $dados): array {
        return User::create($dados);
    }

    public function buscar_por_id($id): array|null {
        return User::find($id);
    }

    public function excluir_por_id($id): bool {
        $user = User::find($id);

        if ($user) {
            return $user->delete();
        }

        return false;
    }
    public function atualizar(cls_user $user) {
        $userModel = User::find($user->id());
        
        if (!$userModel) {
            throw new \Exception('Usuário não encontrado');
        }

        $userModel->nome_completo = $user->nome_completo();
        $userModel->cpf = $user->cpf();
        $userModel->email = $user->email();
        $userModel->senha = bcrypt($user->senha()); // Criptografa a senha
        $userModel->save();

        return $userModel;
    }
}
