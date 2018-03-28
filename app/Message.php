<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mail\MessageNotification;
use Illuminate\Support\Facades\Mail;
use Auth;
class Message extends Model
{
    //
   protected $fillable = ['recipient_id', 'message', 'status'];

   //send email notification 

   public static function send_email(User $sender, User $recipient, Message $message){
   
   	Mail::to($recipient)->send(new MessageNotification($sender, $recipient, $message));
   }
}
