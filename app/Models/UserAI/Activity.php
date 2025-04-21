<?php

namespace App\Models\UserAI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'promptSpace_id'
    ];

    public function promptSpaces()
    {
        return $this->belongsTo(PromptSpaces::class);
    }
}
