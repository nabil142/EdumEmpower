<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model

{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'is_active',
    ];

    public function courses() {
        return $this->hasMany(Course::class);
    }

    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

    
}