@component('mail::message')
    # Thank you signing up on {{env('MAIL_FROM_NAME')}}

    Hello, {{$hosteller->full_name}}
    Thank you for signing up. We're pleased in working with you.

    @component('mail::button', ['url' => route('dashboard.hostel')])
        Go to Dashboard
    @endcomponent

    Thanks,<br>

    © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
