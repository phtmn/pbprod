<?php

namespace App\Models\UserAI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromptSpace extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'public'
    ];

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

}
