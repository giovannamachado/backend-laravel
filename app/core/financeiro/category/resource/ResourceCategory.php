<?php

namespace app\core\financeiro\category\resource;

use app\Models\Category;
use app\core\financeiro\category\resource\interface\int_resource_category;

class ResourceCategory implements int_resource_category {

    public function criar(array $dados) {
        $dados['nome_category'] = trim($dados['nome_category']);  
        
        if (Category::where('nome_category', $dados['nome_category'])->exists()) {
            return [
                'status' => 'error',
                'message' => 'Categoria já existe.'
            ];
        }
    
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
    
        $hasTransactions = \App\Models\Transaction::where('category_id', $id)->exists();
        
        if ($hasTransactions) {
            return [
                'status' => 'error',
                'message' => 'Não é possível excluir esta categoria porque existem transações associadas.'
            ];
        }

        $category->delete();
    
        return [
            'status' => 'success',
            'message' => 'Categoria deletada com sucesso.'
        ];
    }
    
}
