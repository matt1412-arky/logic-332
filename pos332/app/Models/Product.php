<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'varian_id',
        'initial',
        'name',
        'description',
        'price',
        'stock',
        'create_by',
        'updated_by'
    ];
    public function varian(): BelongsTo
    {
        return $this->belongsTo(Varian::class);
    }
}
