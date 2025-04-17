<?php

namespace App\Models\sadmins;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'description',
        'links',
        'rules',
        'comission',
        'cashback'
    ];
}
