<?php
namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    
    
    protected $primaryKey = 'id_category'; 

    protected $fillable = ['nome_category', 'id_category'];

    
    public function user()
        {
            return $this->belongsTo(User::class);
        }
}
    
