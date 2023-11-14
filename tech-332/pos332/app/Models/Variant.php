<?php

namespace App\Models;

use App\Http\Controllers\CategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Variant extends Model
{
    use HasFactory;
    protected $table = 'variants';
    protected $fillable = [
        'category_id',
        'initial',
        'name',
        'active',
        'create_by',
        'updated_by'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
