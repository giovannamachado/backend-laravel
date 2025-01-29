<?php

namespace app\Http\Controllers;

use app\core\financeiro\user\use_case\editar\cls_user_case_editar_user;
use app\core\financeiro\user\use_case\editar\dto\dto_user_editar_entrada;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    private cls_user_case_editar_user $userCase;

    public function __construct(cls_user_case_editar_user $userCase) {
        $this->userCase = $userCase;
    }

    public function editar(Request $request, $id) {
        $validated = $request->validate([
            'nome_completo' => 'required|string',
            'cpf' => 'required|integer',
            'email' => 'required|email',
            'senha' => 'required|string|min:6',
        ]);

        $dtoEntrada = new dto_user_editar_entrada(
            id: $id,
            nome_completo: $validated['nome_completo'],
            cpf: $validated['cpf'],
            email: $validated['email'],
            senha: $validated['senha']
        );

        try {
            $dtoSaida = $this->userCase->executar($dtoEntrada);
            return response()->json($dtoSaida, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
