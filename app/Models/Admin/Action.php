<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Action extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'actions'; 

    protected $fillable = [
        'number',
        'title',
    ];

    
}