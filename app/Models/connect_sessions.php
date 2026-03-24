<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class connect_sessions extends Model
{
    /** @use HasFactory<\Database\Factories\ConnectSessionsFactory> */
    use HasFactory;

    protected $fillable = [
        'session_type',
        'status',
        'start_time',
        'end_time',
        'duration',
        'meeting_link',
        'learning_requests_id',
        'learner_id',
        'teacher_id',
    ];
}
