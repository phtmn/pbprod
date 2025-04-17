<?php

namespace App\Models\SAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'site',
        'description',
        'tiktok',
        'youtube',
        'facebook',
        'instagram',
        'twitter',
        'linkedin'
    ];
}
