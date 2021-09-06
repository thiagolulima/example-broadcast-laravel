<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class channelPrivado implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    private $mensagem;
    private $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($mensagem , User $user)
    {
        $this->mensagem = $mensagem;
        $this->user = $user;
    }
    public function broadcastWith()
    {
       return  [
            'mensagem' => $this->mensagem ,
       ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('App.Models.User.'. $this->user->id);
    }

}
