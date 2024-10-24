@component('mail::message')
Hello, {{ $user->name }}

<p> We received a request to reset your password. Click the button below to reset it:</p>

@component('mail::button', ['url' => url('reset/'.$user->remember_token)])
Reset Password
@endcomponent

<p>If you did not request a password reset, no further action is required.</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
