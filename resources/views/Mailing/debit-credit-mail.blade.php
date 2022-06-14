@component('mail::message')
# Fund Transfer alerts

@if ( $data["mode"] == "credit")


    <p>Dear <strong>{{ $data["name"] }},</strong></p>
    <p>This is to inform you that - <strong>Rs. {{ $data["amount"] }}</strong> has been credited to your account {{ $data["accountNo"] }} on {{ $data["date"] }} at {{ $data["time"] }} by ref No. {{ $data["transactionId"] }}.</p>
    <p>Available Balance : {{ $data["balance"] }}</p>


@elseif( $data["mode"] == "debit")


    <p>Dear <strong>{{ $data["name"] }},</strong></p>
    <p>This is to inform you that - <strong>Rs. {{ $data["amount"] }}</strong> has been debited from your account {{ $data["accountNo"] }} on {{ $data["date"] }} at {{ $data["time"] }} by ref No. {{ $data["transactionId"] }}.</p>
    <p>Available Balance : {{ $data["balance"] }}</p>


@endif
Thanks,<br>
Suraksha Bank
@endcomponent
