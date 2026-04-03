<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badges extends Model
{
    /** @use HasFactory<\Database\Factories\BadgesFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'icon_url',
        'required_xp',
        'criteria',
        'users_id',
    ];

    public function user()
    {
        
    }
}
