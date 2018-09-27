@component('mail::message')
# Thank you signing up on {{env('MAIL_FROM_NAME')}}

Hello, {{$user->full_name}}
The body of your message.

@component('mail::button', ['url' => \Illuminate\Support\Facades\URL::route('student')])
Button Text
@endcomponent

Thanks,<br>

© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
