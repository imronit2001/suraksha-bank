@extends('staff.home')
@section('title', 'KYC Application List')
@section('page-name')
    <div style="width:75%; float:right; margin-left:10%;">
    <h2 style="text-align:center; margin: 50px auto;">KYC Application List</h2>
    <table >
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Form type</td>
                <td></td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Prefix</td>
                <td></td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Full Name</td>
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
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Address</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">City</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Pin</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">State</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Country</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Mobile </td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Telephone</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Address Proof Number</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Date</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Applicant Photo</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Applicant Signature</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Applicant Aadhar Card</td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding: 10px 25px;">Applicant Pan Card</td>
            </tr>
        </table>

    </div>
@endsection

    <!-- <div>
        <ul>
            @foreach($data as $i)
            <li>{{$i->formType}}</li>
            <li>{{$i->prefix}}</li>
            <li>{{$i->FullName}}</li>
            <li>{{$i->FatherName}}</li>
            <li>{{$i->gender}}</li>
            <li>{{$i->DOB}}</li>
            <li>{{$i->MaritalStatus}}</li>
            <li>{{$i->Nationality}}</li>
            <li>{{$i->ResidentialStatus}}</li>
            <li>{{$i->PanNumber}}</li>
            <li>{{$i->AadharNumber}}</li>
            <li>{{$i->Address}}</li>
            <li>{{$i->City}}</li>
            <li>{{$i->Pin}}</li>
            <li>{{$i->State}}</li>
            <li>{{$i->Country}}</li>
            <li>{{$i->Mobile}}</li>
            <li>{{$i->Telephone}}</li>
            <li>{{$i->AddressProofNumber}}</li>
            <li>{{$i->Date}}</li>
            <li>{{$i->ApplicantPhoto}}</li>
            <li>{{$i->ApplicantSignature}}</li>
            <li>{{$i->ApplicantAadhar}}</li>
            <li>{{$i->ApplicantPan}}</li>
            @endforeach
        </ul>-->