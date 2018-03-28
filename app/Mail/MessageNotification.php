<?php

namespace App\Mail;
use App\User;
use App\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageNotification extends Mailable
{
    use Queueable, SerializesModels;
     public $sender;
     public $recipient;
     public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $sender , User $recipient, Message $message)
    {
        //
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->message = $message;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('emails.message.send')->subject("New message from ". $this->sender->name);
    }
}
