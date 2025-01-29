<?php

namespace app\Models;

use app\core\financeiro\transaction\user_case\filtrar\dto\dto_transaction_filtrar_entrada;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tipo',
        'valor',
        'category_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function index(): JsonResponse
    {
        $transactions = Transaction::all();
        return response()->json($transactions);
    }

    public function filter(): JsonResponse
    {
        $filters = new dto_transaction_filtrar_entrada(
            user_id: request()->get('user_id'),
            category_id: request()->get('category_id'),
            tipo: request()->get('tipo')
        );

        $result = $this->filtrarUseCase->filtrarTransactions($filters);

        return response()->json($result->transactions);
    }
}
