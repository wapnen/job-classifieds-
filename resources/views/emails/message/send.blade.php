@component('mail::message')
Dear {{$recipient->name}}, <br>

You have a new message from {{$sender->name}} <br>
Message: "{{$message->message}}" <br>

Login to reply this message


@component('mail::button', ['url' => 'message/'.$sender->id])
View chat
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
