<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use App\Classified;
use App\Bid;

class NewBid extends Mailable
{
    use Queueable, SerializesModels;
    public $bid;
    public $ad;
    public $sender;
    public $recipient;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $sender, User $recipient,  Classified $ad, Bid $bid)
    {
        //
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->ad = $ad;
        $this->bid = $bid;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.bids.send')->subject('New job bid');
    }
}
