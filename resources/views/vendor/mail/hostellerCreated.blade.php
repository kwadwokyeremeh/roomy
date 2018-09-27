@component('mail::message')
# Thank you signing up on {{env('MAIL_FROM_NAME')}}

Hello, {{$hosteller->full_name}}
The body of your message.

@component('mail::button', ['url' => \Illuminate\Support\Facades\URL::route('dashboard.hostel')])
        Go to Dashboard
@endcomponent

Thanks,<br>
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
