<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    use HasFactory;

    protected $table = "menus";
    protected $fillable = ['parent_id','menu','link','role_id'];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
