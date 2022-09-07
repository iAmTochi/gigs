<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class GigCreatedNotification extends Notification
{
    use Queueable;
    private $gig;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($gig)
    {
        //
        $this->gig = $gig;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($gig)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->from('gig@gmail.com', 'Gig Created Email')
                    ->view('email.gig_created')->with($this->gig);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
