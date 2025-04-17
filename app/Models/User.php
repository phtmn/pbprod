<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\UserAI\EngineerFavorite;
use App\Models\UserAI\Feed;
use App\Models\UserAI\FeedFavorites;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\UserAI\Prompt;
use App\Models\UserAI\PromptSpace;
use App\Models\UserAI\Tag;
use App\Models\UserAI\PromptFavorite;
use App\Models\UserAI\ToolFavorite;
use App\Models\UserAI\UserFavorite;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'usertype',
        'password',
        'image',
        'created_at',
        'whatsapp',
        'bio'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function prompts()
    {
        return $this->hasMany(Prompt::class);
    }

    public function promptSpaces()
    {
        return $this->hasMany(PromptSpace::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
    public function feeds()
    {
        return $this->hasMany(Feed::class);
    }

    public function favPrompt()
    {
        return $this->hasMany(PromptFavorite::class);
    }

    public function hasFavorite()
    {
        return $this->hasMany(UserFavorite::class);
    }

    public function hasFavoriteFeed()
    {
        return $this->hasManyThrough(Feed::class, FeedFavorites::class, 'user_id', 'id', 'id', 'feed_id');
    }

    public function toolFavorite()
    {
        return $this->hasMany(ToolFavorite::class);
    }

    public function toolEngineer()
    {
        return $this->hasMany(EngineerFavorite::class);
    }
}
