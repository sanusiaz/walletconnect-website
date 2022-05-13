@component('mail::message')
# Account Verification

{{ $data['message'] }}

@component('mail::button', ['url' => $data['verification_link']])
Verify Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
