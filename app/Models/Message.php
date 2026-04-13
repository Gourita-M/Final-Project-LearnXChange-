<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Connect_sessions;
use App\Models\User;

class Message extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'content',
        'sender_id',
        'connect_sessions_id',
        'is_read',
        'sent_at'
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'sent_at' => 'datetime',
        'is_read' => 'boolean'
    ];

    /**
     * Get the user that sent the message
     */
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    /**
     * Get the session this message belongs to
     */
    public function session()
    {
        return $this->belongsTo(Connect_Sessions::class, 'connect_sessions_id');
    }
}