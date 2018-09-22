@component('mail::message')
Hi, {{$user->firstName}}

Your account has successfully been verified.

@component('mail::button', ['url' => secure_url(route('student'))])
Go to dashboard
@endcomponent

Thanks,<br>
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
