@extends('staff.home')
@section('title', 'Account Opening Application')
@section('page-name')
<div style="width:75%; float:right;margin-left:10%;">
    @foreach ($data as $i) 

                <label scope="col">Prefix</label>
                <label scope="col">Full Name</label>
                <label scope="col">Date Of Birth</label>
                <label scope="col">Gender</label>
                <label scope="col">Marital Status</label>
                <label scope="col">Father Name</label>
                <label scope="col">Mother Name</label>
                <label scope="col">Gaurdian Name</label>
                <label scope="col">Relation With Guardian</label>
                <label scope="col">Nationality </label>
                <label scope="col">Residential Status</label>
                <label scope="col">Occupation Type</label>
                <label scope="col">Religion</label>
                <label scope="col">Category</label>
                <label scope="col">Customer Type</label>
                <label scope="col">Disability</label>
                <label scope="col">Qualification</label>
                <label scope="col">Pan Number</label>
                <label scope="col">Mobile</label>
                <label scope="col">Email</label>
                <label scope="col">Telephone</label>
                <label scope="col">Address Proof</label>
                <label scope="col">Address Proof Number</label>
                <label scope="col">Issued By</label>
                <label scope="col">Address Type</label>
                <label scope="col">Address</label>
                <label scope="col">District</label>
                <label scope="col">City</label>
                <label scope="col">State</label>
                <label scope="col">Pin</label>
                <label scope="col">Country</label>
                <label scope="col">Place</label>
                <label scope="col">Date of Submission</label>
                <label scope="col">Applicant Photo</label>
                <label scope="col">Applicant Signature</label>
                <label scope="col">Applicant Aadhar</label>
                <label scope="col">Status</label>
                <label scope="col">Action</label>                           
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
                    <p><a href={{ url('/admin/remove-staff/' . $i->id . '/Deactivate') }}><button
                    class="btn btn-danger">Deactivate</button></a></p>
                    @else
                    <p><a href={{ url('/admin/remove-staff/' . $i->id . '/Active') }}><button
                    class="btn btn-success">Activate</button>
                    @endif
                    </a></p>

</div>
@endforeach