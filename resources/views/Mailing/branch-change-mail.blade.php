@component('mail::message')
    # Branch Change Application

    @if ($data['status'] == 0)
        <div>

            <h1>Success !</h1>
            <div>
                Your request for changing the branch from <strong>{{ $data['prevBranch'] }}</strong> to
                <strong>{{ $data['curBranch'] }}</strong> has been submitted. <br> We will verify your details as soon as
                possible.
            </div>
        </div>
    @elseif ($data['status'] == 1)
        <div>

            <h1>Congratulations !</h1>
            <div>
                Your request for changing the branch from <strong>{{ $data['prevBranch'] }}</strong> to
                <strong>{{ $data['curBranch'] }}</strong> has been approved.
            </div>
        </div>
    @elseif($data['status'] == 2)
        <div>
            <h1>OOPS !</h1>
            <div>
                Your request for changing the branch from <strong>{{ $data['prevBranch'] }}</strong> to
                <strong>{{ $data['curBranch'] }}</strong> has been declined. <br> Please Apply Again with proper details
                and reason.
            </div>
        </div>
    @endif



    Thanks,<br>
    Suraksha Bank
@endcomponent
