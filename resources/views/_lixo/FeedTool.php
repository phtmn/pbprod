<?php

namespace App\Models\UserAI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedTool extends Model
{
    use HasFactory;

    protected $fillable = [
        'feed_id',
        'tool_id'
    ];
}
