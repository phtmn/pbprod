<?php

namespace App\Models\UserAI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineerFavorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'engineer_id'
    ];
}
