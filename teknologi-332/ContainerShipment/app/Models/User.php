<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = ['name','email','password','role_id','create_by'];

    public function role():BelongsTo {
        return $this->belongsTo(Role::class);
    }
}
