<?php

namespace App\Models\UserAI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagsUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'permission',
        'tag_id'
    ];

    public function tags()
    {
        return $this->belongsTo(User::class);
    }
}
