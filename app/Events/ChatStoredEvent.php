<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel; //public. semua orgn bisa liat
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel; //sama, tapi kita bisa liat siapa yg login, aktif, logout,
use Illuminate\Broadcasting\PrivateChannel; //kita boleh masuk ketika sudah keluar aplikas
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Chat;

class ChatStoredEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $chat;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Chat $chat)
    {
        //
        $this->chat = $chat;
    }

    public function broadcastWith(){
        return [
            'data' => $this->chat->load(['user'])
        ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PresenceChannel('chat-channel');
    }
}
