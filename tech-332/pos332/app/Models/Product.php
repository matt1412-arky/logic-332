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
        'variant_id',
        'initial',
        'name',
        'description',
        'price',
        'stock'
    ];

    public function variant(): BelongsTo
    {
        return $this->belongsTo(Variant::class);
    }
}
