<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condidate extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'user_id',
    'cin','phone','email','diplome','bac','specialite','experience','status','created_at','update_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
