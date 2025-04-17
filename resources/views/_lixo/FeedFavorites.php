<?php

namespace App\Models\UserAI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedFavorites extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'feed_id'
    ];
}
