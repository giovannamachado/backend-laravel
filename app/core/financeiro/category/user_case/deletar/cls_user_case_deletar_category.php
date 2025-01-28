<?php

namespace app\core\financeiro\category\user_case\deletar;


use app\core\financeiro\category\resource\interface\int_resource_category;
use app\Models\Transaction;

class cls_user_case_deletar_category {
    public function __construct(private int_resource_category $resource_category) {
    }

    public function executar($id) {

        $hasTransactions = Transaction::where('category_id', $id)->exists();

        if ($hasTransactions) {
            return [
                'status' => 'error',
                'message' => 'Não é possível excluir esta categoria porque existem transações associadas.'
            ];
        }


        return $this->resource_category->excluir_por_id($id);
    }
}
