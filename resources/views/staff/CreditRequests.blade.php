@extends('staff.home')
@section('title', 'Credit Card Application List')
@section('page-name')
    <div style="width:75%; float:right;margin-left:10%;">
        <h2 style="text-align:center; margin: 50px auto;">Credit Card Application List</h2>
        <table >
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Prefix</td>
                <td></td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Name</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Father Name</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Gender</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Date of Birth</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Marital Status</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Nationality</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Residential Status</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Pan Card Number</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Aadhar Card Number</td>
            </tr>
        </table>

    </div>
@endsection


<!-- <div>
<ul>
    @foreach($data as $i)
            <td><p>{{$i->FullName}}</p></td>
            <td><p></p></td>
            <td><p>{{$i->gender}}</p></td>

    <p>{{$i->DOB}}</p>
    <p>{{$i->MaritalStatus}}</p>
    <p>{{$i->Nationality}}</p>
    <p>{{$i->ResidentialStatus}}</p>
    <p>{{$i->PanNumber}}</p>
    <p>{{$i->AadharNumber}}</p>
    @endforeach
</ul>
</div> -->