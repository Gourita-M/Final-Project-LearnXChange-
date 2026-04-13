<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The message instance.
     */
    public $message;

    /**
     * Create a new event instance.
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     * Using session-specific channel so only relevant users receive the message
     */
    public function broadcastOn()
    {
        return new Channel('chat.session.' . $this->message->connect_sessions_id);
    }

    /**
     * Get the data that should be broadcast.
     */
    public function broadcastWith()
    {
        return [
            'message' => [
                'id' => $this->message->id,
                'content' => $this->message->content,
                'sender_id' => $this->message->sender_id,
                'sender_name' => $this->message->sender?->name ?? 'Unknown',
                'sender_avatar' => $this->message->sender?->avatar_url ?? null,
                'sent_at' => $this->message->sent_at?->toIso8601String(),
                'formatted_time' => $this->message->sent_at?->format('h:i A'),
                'is_read' => $this->message->is_read,
                'connect_sessions_id' => $this->message->connect_sessions_id,
            ]
        ];
    }
}