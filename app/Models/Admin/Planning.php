<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Planning extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'planning';

    protected $fillable = [
        'year',
        'management_id',
        'user_id',
        'action_id',
        'budget',
        'initiative',
        'goal',
        'steps',
        'indicator_quantitative',
        'indicator_qualitative',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function management()
    {
        return $this->belongsTo(Management::class, 'management_id');
    }

    public function action()
    {
        return $this->belongsTo(Action::class, 'action_id');
    }
}
