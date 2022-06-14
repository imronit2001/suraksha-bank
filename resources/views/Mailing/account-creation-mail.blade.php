@component('mail::message')

<div>
    <h1>Account Creation Successfull</h1>
    <h1>Congratulations, {{ $data['FullName'] }}</h1>
    <h2>Your Account Details are :</h2>
    <div>
        <table>
            <tr>
                <td>Customer Id</td>
                <td>{{ $data['customerId'] }}</td>
            </tr>
            <tr>
                <td>Account No</td>
                <td>{{ $data['accountNo'] }}</td>
            </tr>
            <tr>
                <td>Customer Name</td>
                <td>{{ $data['FullName'] }}</td>
            </tr>
            <tr>
                <td>S/D/H/o</td>
                <td>{{ $data['FatherName'] }}</td>
            </tr>
            <tr>
                <td>Account Type</td>
                <td>Regular Saving Bank Account</td>
            </tr>
            <tr>
                <td>Phone No</td>
                <td>{{ $data['Mobile'] }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $data['Email'] }}</td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td>{{ $data['dob'] }}</td>
            </tr>
            <tr>
                <td>Branch Name</td>
                <td>{{ $data['BranchName'] }}</td>
            </tr>
        </table>
    </div>
    <div>
        <p>Your Login Password is : {{ $data['login_pass'] }}</p>
        <p>Your Transaction Password is : {{ $data['transaction_pass'] }}</p>
        <p>Don't Share your credentials to anyone</p>
    </div>

</div>

Thanks,<br>
Suraksha Bank
@endcomponent
