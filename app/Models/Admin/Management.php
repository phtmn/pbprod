<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Management extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'managements'; 

    protected $fillable = [
        'title',
        'name',
        'description',
    ];

    
}