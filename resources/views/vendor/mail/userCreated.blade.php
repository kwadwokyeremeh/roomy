@component('mail::message')
# Thank you signing up on {{env('MAIL_FROM_NAME')}}

Hello, {{$user->full_name}}
Please click the button below to verify your email address.

@component('mail::button', ['url' => \Illuminate\Support\Facades\URL::route('student')])
Verify Email Address
@endcomponent
If you did not create an account, no further action is required.
Regards,<br>
{{config('app.name')}}

© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
