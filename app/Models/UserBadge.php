<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBadges extends Model
{
    /** @use HasFactory<\Database\Factories\UserBadgesFactory> */
    use HasFactory;

    protected $fillable = [
        'users_id',
        'badges_id',
        'earned_at',
    ];
}
