<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningRequest extends Model
{
    /** @use HasFactory<\Database\Factories\LearningRequestFactory> */
    use HasFactory;

    protected $fillable = [
        'description',
        'goal_description',
        'preferred_session_type',
        'status',
        'learner_id',
        'teacher_id',
        'skill_id',
    ];
}
