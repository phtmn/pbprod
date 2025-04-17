<?php

namespace App\Models\UserAI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromptSpacesUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'permission',
        'prompt_space_id'
    ];
}
