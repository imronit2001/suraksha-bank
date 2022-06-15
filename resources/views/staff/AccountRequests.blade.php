@extends('staff.home')
@section('title', 'Account Opening Application')
@section('page-name')
<div style="width:75%; float:right;margin-left:10%;">
    <h2 style="text-align:center; margin: 50px auto;">Account Opening Application List</h2>

    <table style="width:80%; margin-left:15%; text-align:left; border:1px solid grey; margin-bottom: 50px;" >
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Prefix</td>
            <td>{{$data->prefix}}</td>
            
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Full Name</td>
            <td>{{$data->FullName}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Date of Birth</td>
            <td>{{$data->DOB}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Gender</td>
            <td>{{$data->gender}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Marital Status</td>
            <td>{{$data->MaritalStatus}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Father Name</td>
            <td>{{$data->FatherName}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Mother Name</td>
            <td>{{$data->MotherName}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Guardian Name</td>
            <td>{{$data->GaurdianName}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Relation With Guardian</td>
            <td>{{$data->RelationWithGuardian}}</td>
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
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Occupation</td>
            <td>{{$data->OccupationType}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Religion</td>
            <td>{{$data->religion}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Category</td>
            <td>{{$data->category}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Customer Type</td>
            <td>{{$data->CustomerType}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Disability</td>
            <td>{{$data->Disability}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Qualification</td>
            <td>{{$data->Qualification}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Pan Card Number</td>
            <td>{{$data->PanNumber}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Mobile </td>
            <td>{{$data->Mobile}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Email </td>
            <td>{{$data->Email}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Telephone</td>
            <td>{{$data->Telephone}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Address Proof</td>
            <td>{{$data->AddressProof}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Address Proof Number</td>
            <td>{{$data->AddressProofNumber}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Issued By</td>
            <td>{{$data->issuedBy}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Address Type</td>
            <td>{{$data->AddressType}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Address</td>
            <td>{{$data->Address}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">City</td>
            <td>{{$data->City}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">District</td>
            <td>{{$data->District}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">State</td>
            <td>{{$data->State}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Pin</td>
            <td>{{$data->Pin}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Country</td>
            <td><p>{{$data->Country}}</p></td>

        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Place</td>
            <td>{{$data->Place}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Application Date</td>
            <td>{{$data->signDate}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Applicant Photo</td>
            <td>{{$data->ApplicantPhoto}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Applicant Signature</td>
            <td>{{$data->ApplicantSignature}}</td>
        </tr>
        <tr>
            <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Applicant Aadhar Card</td>
            <td>{{$data->ApplicantAadhar}}</td>
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