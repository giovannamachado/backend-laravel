<?php

namespace app\Http\Controllers;

use app\core\financeiro\transaction\user_case\cadastrar\cls_user_case_cadastrar_transaction;
use app\core\financeiro\transaction\user_case\cadastrar\dto\dto_transaction_cadastrar_entrada;
use app\core\financeiro\transaction\user_case\deletar\cls_user_case_deletar_transaction;
use app\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TransactionController extends Controller
{
    private cls_user_case_cadastrar_transaction $useCaseCadastrar;
    private cls_user_case_deletar_transaction $useCaseDeletar;

    public function __construct(
        cls_user_case_cadastrar_transaction $useCaseCadastrar,
        cls_user_case_deletar_transaction $useCaseDeletar
    ) {
        $this->useCaseCadastrar = $useCaseCadastrar;
        $this->useCaseDeletar = $useCaseDeletar;
    }

    /**
     * Método para criar uma nova transação.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $dtoEntrada = new dto_transaction_cadastrar_entrada(
                $request->input('user_id'),
                $request->input('tipo'),
                $request->input('valor'),
                $request->input('category_id')
            );

            $dtoSaida = $this->useCaseCadastrar->execute($dtoEntrada);

            return response()->json($dtoSaida, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao criar a transação: ' . $e->getMessage()], 400);
        }
    }

    /**
     * Método para deletar uma transação pelo ID.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $resultado = $this->useCaseDeletar->executar($id);

            if ($resultado['status'] === 'success') {
                return response()->json(['message' => $resultado['message']], 200);
            }

            return response()->json(['message' => $resultado['message']], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao deletar a transação: ' . $e->getMessage()], 500);
        }
    }

    public function index(Request $request)
    {
        $user = \Illuminate\Support\Facades\Auth::user();


        $transactions = Transaction::where('user_id', $user->id)->get();


        if ($request->wantsJson()) {
            return response()->json($transactions);
        }

        return view('transacoes.index', compact('transactions'));
    }
}
