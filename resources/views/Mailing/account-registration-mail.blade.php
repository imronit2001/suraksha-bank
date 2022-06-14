@component('mail::message')
# Congratulations, {{ $data["name"] }}

Your account has been created successfully..
<br>
userid : <strong>{{ $data["userid"] }}</strong>
<br>
password : {{ $data["password"] }}
<br>

Please Change Your Login Password after login first time

Thanks,<br>
Suraksha Bank
@endcomponent
