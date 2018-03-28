@component('mail::message')

@component('mail::panel')
Dear {{$recipient->name}} , 
A bid has been made for your job posting! click on the button below to view your bids!
@endcomponent

@component('mail::button', ['url' => route('classified.show', $ad->id)])
View bids
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
