<?php

namespace App\Models\UserAI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'feed_id',
        'tag_id'
    ];
}
