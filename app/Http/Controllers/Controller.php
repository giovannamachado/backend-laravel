<?php
namespace app\Http\Controllers;

use app\core\financeiro\category\user_case\cadastrar\cls_user_case_cadastrar_category;
use app\core\financeiro\category\user_case\cadastrar\dto\dto_category_cadastrar_entrada;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    private cls_user_case_cadastrar_category $useCase;

    public function __construct(cls_user_case_cadastrar_category $useCase)
    {
        $this->useCase = $useCase;
    }

    public function store(Request $request)
    {
        $dtoEntrada = new dto_category_cadastrar_entrada($request->input('nome_category', ''), $request->input('id_category', 0));

        $dtoSaida = $this->useCase->execute($dtoEntrada);


        return response()->json($dtoSaida, 201);
    }
}
