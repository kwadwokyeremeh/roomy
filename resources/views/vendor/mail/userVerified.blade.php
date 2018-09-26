@component('mail::message')
Hi, {{$user->firstName}}

Your account has successfully been verified.

@component('mail::button', ['url' => \Illuminate\Support\Facades\URL::route('student'), 'color'=> 'green'])
Go to dashboard
@endcomponent

Thanks,<br>
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
