<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewMessageNotification extends Notification
{
    use Queueable;

    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line("Vous avez reçu un nouveau message de {$this->message->sender->name}.")
            ->action('Voir le message', url('/messages'))
            ->line('Merci d’utiliser notre plateforme !');
    }

    public function toArray($notifiable)
    {
        return [
            'sender' => $this->message->sender->name,
            'message' => $this->message->message,
            'link' => url('/messages'),
        ];
    }
}

