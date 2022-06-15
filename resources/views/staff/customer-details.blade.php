@extends('staff.home')
@section('title', 'Customer Details Page ')
@section('page-name')
    <div style="width:75%; float:right;margin-left:10%;">
        <div class="d-flex justify-content-center align-items-center">
            <div style="width: 25%">
                <img src={{ $data->ApplicantPhoto }} class="w-100" alt="photo">
                <p class="text-center">Applicant Photo</p>
            </div>
            <div style="width: 25%">
                <img src={{ $data->ApplicantPhoto }} class="w-100" alt="photo">
                <p class="text-center">Applicant Photo</p>
            </div>
            <div style="width: 25%">
                <img src={{ $data->ApplicantPhoto }} class="w-100" alt="photo">
                <p class="text-center">Applicant Photo</p>
            </div>
        </div>

        <table style="width:80%; margin-left:15%; text-align:left;  margin-bottom: 50px;">
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Full Name</td>
                <td>{{ $data->prefix." ".$data->FullName }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Customer Id</td>
                <td>{{ $data->customerId }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Account No</td>
                <td>{{ $data->account_no }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Account Balance</td>
                <td>{{ $data->balance }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Branch Name</td>
                <td>{{ $data->BranchCode." ". $data->BranchName }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Date of Birth</td>
                <td>{{ $data->DOB }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Gender</td>
                <td>{{ $data->gender }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Marital Status</td>
                <td>{{ $data->MaritalStatus }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Father Name</td>
                <td>{{ $data->FatherName }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Mother Name</td>
                <td>{{ $data->MotherName }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Guardian Name</td>
                <td>{{ $data->GaurdianName }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Relation With Guardian</td>
                <td>{{ $data->RelationWithGuardian }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Nationality</td>
                <td>{{ $data->Nationality }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Residential Status</td>
                <td>{{ $data->ResidentialStatus }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Occupation</td>
                <td>{{ $data->OccupationType }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Religion</td>
                <td>{{ $data->religion }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Category</td>
                <td>{{ $data->category }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Customer Type</td>
                <td>{{ $data->CustomerType }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Disability</td>
                <td>{{ $data->Disability }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Qualification</td>
                <td>{{ $data->Qualification }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Pan Card Number</td>
                <td>{{ $data->PanNumber }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Mobile </td>
                <td>{{ $data->Mobile }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Email </td>
                <td>{{ $data->Email }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Telephone</td>
                <td>{{ $data->Telephone }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Address Proof</td>
                <td>{{ $data->AddressProof }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Address Proof Number</td>
                <td>{{ $data->AddressProofNumber }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Issued By</td>
                <td>{{ $data->issuedBy }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Address Type</td>
                <td>{{ $data->AddressType }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Address</td>
                <td>{{ $data->Address }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">City</td>
                <td>{{ $data->City }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">District</td>
                <td>{{ $data->District }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">State</td>
                <td>{{ $data->State }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Pin</td>
                <td>{{ $data->Pin }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Country</td>
                <td>
                    <p>{{ $data->Country }}</p>
                </td>

            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Place</td>
                <td>{{ $data->Place }}</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; padding: 10px 25px;">Application Date</td>
                <td>{{ $data->signDate }}</td>
            </tr>

        </table>

        <h2>Transaction Details</h2>

        <table class="table">
            <thead>
                <tr>
                    <td>Date</td>
                    <td>Time</td>
                    <td>Reference Id</td>
                    <td>Credit</td>
                    <td>Debit</td>
                    <td>Balance</td>
                </tr>
            </thead>
        </table>


    </div>
@endsection
