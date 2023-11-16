<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Varian extends Model
{
    use HasFactory;
    protected $table = 'varians';
    protected $fillable = ['category_id','initial','name','active','create_by','updated_by'];

    public function category():BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
