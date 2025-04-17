<?php

namespace App\Models\UserAI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prompt extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'public',
        'description',
        'tag_id'
    ];

    public function tags()
    {
        return $this->belongsTo(Tag::class);
    }

    public function hasFavorite(){
        return $this->hasMany(PromptFavorite::class, 'prompt_id');
    }

}
