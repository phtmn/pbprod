<?php

namespace App\Models\UserAI;

use App\Models\sadmins\Tool;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'user_id',
        'description',
        'link',
    ];

    public function hasTool() {
        return $this->hasManyThrough(Tool::class, FeedTool::class, 'feed_id', 'id', 'id', 'tool_id');
    }

    public function hasTag() {
        return $this->hasManyThrough(Tag::class, FeedTag::class, 'feed_id', 'id', 'id', 'tag_id');
    }
}
