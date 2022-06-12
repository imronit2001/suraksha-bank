@component('mail::message')
# Congratulations, {{ $data["name"] }}

Your account has been created successfully..
<br>
userid : <strong>{{ $data["userid"] }}</strong>
<br>
password : {{ $data["password"] }}
<br>

Please Change Your Login Password after login first time

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{-- {{ config('app.name') }} --}}
Suraksha Bank
@endcomponent
