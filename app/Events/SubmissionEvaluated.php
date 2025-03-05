<?php
namespace App\Events;

use App\Models\Submission;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SubmissionEvaluated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $submission;

    public function __construct(Submission $submission)
    {
        $this->submission = $submission;
    }

    public function broadcastOn()
    {
        return new Channel('submission.' . $this->submission->id);
    }

    public function broadcastWith()
    {
        return [
            'status' => $this->submission->status,
            'message' => 'Votre soumission a été ' . $this->submission->status,
        ];
    }
}

