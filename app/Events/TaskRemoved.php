<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TaskRemoved implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $task;
    public function __construct($task)
    {
        //
        $this->task = $task;
    }

/**
 * Get the channels the event should broadcast on.
 *
 * @return \Illuminate\Broadcasting\Channel|array
 */

    public function broadcastOn()
    {
        return new Channel('taskRemoved');
    }

    public function broadcastAs()
    {
        return 'task-removed';
    }

}
