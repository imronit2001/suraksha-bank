@extends('staff.home')
@section('title', 'Credit Card Application List')
@section('page-name')
    <div style="width:75%; float:right;margin-left:10%;">
        <h2 style="text-align:center; margin: 50px auto;">Credit Card Application List</h2>
        <table style="width:80%; margin-left:15%; text-align:left; border:1px solid grey; margin-bottom: 50px;">
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Prefix</td>
                <td>{{$data->prefix}}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Name</td>
                <td>{{$data->FullName}}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Father Name</td>
                <td>{{$data->FatherName}}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Gender</td>
                <td>{{$data->gender}}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Date of Birth</td>
                <td>{{$data->DOB}}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Marital Status</td>
                <td>{{$data->MaritalStatus}}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Nationality</td>
                <td>{{$data->Nationality}}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Residential Status</td>
                <td>{{$data->ResidentialStatus}}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Pan Card Number</td>
                <td>{{$data->PanNumber}}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Aadhar Card Number</td>
                <td>{{$data->AadharNumber}}</td>
            </tr>
        </table>
        <div style="margin-left:50%; margin-bottom: 50px;">
            @if ($data->status == 'Active')
                <p>
                    <a href={{ url('/admin/remove-staff/' . $data->id . '/Deactivate') }}><button class="btn btn-danger">Deactivate</button></a>
                </p>
            @else
                <p>
                    <a href={{ url('/admin/remove-staff/' . $data->id . '/Active') }}><button class="btn btn-success">Activate</button></a>
                </p>
            @endif
        </div>

    </div>
@endsection

