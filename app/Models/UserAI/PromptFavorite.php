<?php
namespace App\Models\UserAI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromptFavorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'prompt_id'
    ];
}
