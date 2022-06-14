@component('mail::message')
# Customer Care
<h1>Dear {{ $data['name'] }},</h1>
<p>Reply from bank officials regarding your query : </p>
<br>
<p>
    {{ $data['reply'] }}
</p>



Thanks,<br>
Suraksha Bank
@endcomponent
