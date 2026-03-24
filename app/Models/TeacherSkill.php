<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherSkills extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherSkillsFactory> */
    use HasFactory;

    protected $fillable = [
        'users_id',
        'skills_id',
        'level',
        'years_experience',
        'is_teaching',
        'is_learning',
    ];
}
