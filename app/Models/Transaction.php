<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tipo',
        'valor',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

public function user()
    {
        return $this->belongsTo(User::class);
    }
}
