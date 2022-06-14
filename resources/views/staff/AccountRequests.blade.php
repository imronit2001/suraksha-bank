@extends('staff.home')
@section('title', 'Account Opening Application')
@section('page-name')
<div style="width:75%; float:right;margin-left:10%; display:flex;">
    <!-- <div class="FieldName" style="width:40%; border: 1px solid red;">
        <label scope="col">Prefix</label>
        <br><label scope="col">Full Name</label>
        <br><label scope="col">Date Of Birth</label>
        <br><label scope="col">Gender</label>
        <br><label scope="col">Marital Status</label>
        <br><label scope="col">Father Name</label>
        <br><label scope="col">Mother Name</label>
        <br><label scope="col">Gaurdian Name</label>
        <br><label scope="col">Relation With Guardian</label>
        <br><label scope="col">Nationality </label>
        <br><label scope="col">Residential Status</label>
        <br><label scope="col">Occupation Type</label>
        <br><label scope="col">Religion</label>
        <br><label scope="col">Category</label>
        <br><label scope="col">Customer Type</label>
        <br><label scope="col">Disability</label>
        <br><label scope="col">Qualification</label>
        <br><label scope="col">Pan Number</label>
        <br><label scope="col">Mobile</label>
        <br><label scope="col">Email</label>
        <br><label scope="col">Telephone</label>
        <br><label scope="col">Address Proof</label>
        <br><label scope="col">Address Proof Number</label>
        <br><label scope="col">Issued By</label>
        <br><label scope="col">Address Type</label>
        <br><label scope="col">Address</label>
        <br><label scope="col">District</label>
        <br><label scope="col">City</label>
        <br><label scope="col">State</label>
        <br><label scope="col">Pin</label>
        <br><label scope="col">Country</label>
        <br><label scope="col">Place</label>
        <br><label scope="col">Date of Submission</label>
        <br><label scope="col">Applicant Photo</label>
        <br><label scope="col">Applicant Signature</label>
        <br><label scope="col">Applicant Aadhar</label>
        <br><label scope="col">Status</label>
        <br><label scope="col">Action</label>  
    </div> -->
    <div class="FieldValues"> 
    @foreach ($data as $i) 

        <td><p>{{$i->prefix}}</p></td>
        <td><p>{{$i->FullName}}</p></td>
        <td><p>{{$i->DOB}}</p></td>
        <td><p>{{$i->gender}}</p></td>
        <td><p>{{$i->MaritalStatus}}</p></td>
        <td><p>{{$i->FatherName}}</p></td>
        <td><p>{{$i->MotherName}}</p></td>
        <td><p>{{$i->GaurdianName}}</p></td>
        <td><p>{{$i->RelationWithGuardian}}</p></td>
        <td><p>{{$i->Nationality}}</p></td>
        <td><p>{{$i->ResidentialStatus}}</p></td>
        <td><p>{{$i->OccupationType}}</p></td>
        <td><p>{{$i->religion}}</p></td>
        <td><p>{{$i->category}}</p></td>
        <td><p>{{$i->CustomerType}}</p></td>
        <td><p>{{$i->Disability}}</p></td>
        <td><p>{{$i->Qualification}}</p></td>
        <td><p>{{$i->PanNumber}}</p></td>
        <td><p>{{$i->Mobile}}</p></td>
        <td><p>{{$i->Email}}</p></td>
        <td><p>{{$i->Telephone}}</p></td>
        <td><p>{{$i->AddressProof}}</p></td>
        <td><p>{{$i->AddressProofNumber}}</p></td>
        <td><p>{{$i->issuedBy}}</p></td>
        <td><p>{{$i->AddressType}}</p></td>
        <td><p>{{$i->Address}}</p></td>
        <td><p>{{$i->City}}</p></td>
        <td><p>{{$i->District}}</p></td>
        <td><p>{{$i->State}}</p></td>
        <td><p>{{$i->Pin}}</p></td>
        <td><p>{{$i->Country}}</p></td>
        <td><p>{{$i->Place}}</p></td>
        <td><p>{{$i->signDate}}</p></td>
        <td><p>{{$i->ApplicantPhoto}}</p></td>
        <td><p>{{$i->ApplicantSignature}}</p></td>
        <td><p>{{$i->ApplicantAadhar}}</p></td>
        
        <p>
            @if ($i->status == 'Active')
            <button class="btn btn-success disabled">Activated</button>
            @else
            <button class="btn btn-danger disabled">Deactivated</button>
            @endif
        </p>
        @if ($i->status == 'Active')
            <p>
                <a href={{ url('/admin/remove-staff/' . $i->id . '/Deactivate') }}><button class="btn btn-danger">Deactivate</button></a>
            </p>
        @else
            <p>
                <a href={{ url('/admin/remove-staff/' . $i->id . '/Active') }}><button class="btn btn-success">Activate</button></a>
            </p>
        @endif
        @endforeach
    </div>  
</div>