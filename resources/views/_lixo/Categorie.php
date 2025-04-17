<?php

namespace App\Models\sadmins;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
       // 'image',
        'name',
        'description'        
    ];
}
