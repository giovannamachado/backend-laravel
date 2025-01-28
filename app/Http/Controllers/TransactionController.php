<?php

namespace app\Http\Controllers;

use app\core\financeiro\transaction\user_case\cadastrar\cls_user_case_cadastrar_transaction;
use app\core\financeiro\transaction\user_case\cadastrar\dto\dto_transaction_cadastrar_entrada;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TransactionController extends Controller
{
    private cls_user_case_cadastrar_transaction $useCase;

    public function __construct(cls_user_case_cadastrar_transaction $useCase)
    {
        $this->useCase = $useCase;
    }

    public function store(Request $request)
    {
        $dtoEntrada = new dto_transaction_cadastrar_entrada(
            $request->input('user_id'),
            $request->input('tipo'),
            $request->input('valor'),
            $request->input('category_id')
        );

        $dtoSaida = $this->useCase->execute($dtoEntrada);

        return response()->json($dtoSaida, 201);
    }
}
