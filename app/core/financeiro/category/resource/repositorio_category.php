<?php

namespace App\core\financeiro\category\resource;

use app\Models\Category;
use app\core\financeiro\resource\interface\int_resource_category;

class ResourceCategory implements int_resource_category {

    public function criar(array $dados) {
        return Category::create($dados);
    }

    public function atualizar($id, array $dados) {
        $category = Category::find($id);

        if (!$category) {
            return [
                'status' => 'error',
                'message' => 'Categoria não encontrada.'
            ];
        }

        $category->update($dados);

        return [
            'status' => 'success',
            'message' => 'Categoria atualizada com sucesso.',
            'data' => $category
        ];
    }

    public function listar() {
        return Category::all();
    }

    public function buscar_por_id($id) {
        $category = Category::find($id);

        if (!$category) {
            return [
                'status' => 'error',
                'message' => 'Categoria não encontrada.'
            ];
        }

        return [
            'status' => 'success',
            'data' => $category
        ];
    }

    public function excluir_por_id($id) {
        $category = Category::find($id);

        if (!$category) {
            return [
                'status' => 'error',
                'message' => 'Categoria não encontrada.'
            ];
        }

        $category->delete();

        return [
            'status' => 'success',
            'message' => 'Categoria deletada com sucesso.'
        ];
    }
}
