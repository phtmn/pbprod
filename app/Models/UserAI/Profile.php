<?php

namespace App\Models\UserAI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prompt extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'usertype',
        'email',
        'bio'
    ];
}
