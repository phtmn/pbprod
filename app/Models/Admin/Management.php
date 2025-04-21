<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Management extends Model
{
    use HasFactory;

    protected $table = 'managements'; 

    protected $fillable = [
        'acronym',
        'name',     
    ];

    
}