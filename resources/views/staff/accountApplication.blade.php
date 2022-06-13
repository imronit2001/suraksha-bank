@extends('staff.home')
@section('title', 'Account Opening Application List')
@section('page-name')
    <div style="width:75%; float:right;margin-left:10%;">
    <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="smallwidth">Prefix</th>
                        <th scope="col" class="smallwidth">Customer Name</th>
                        <th scope="col" class="smallwidth">Email</th>
                        <th scope="col" class="smallwidth">Phone</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $i)
                        <tr>
                            <td>
                                <p>{{$i->prefix}}</p>
                            </td>
                            <td>
                                <p>{{$i->FullName}}</p>
                            </td>
                            <td>
                                <p>{{ $i->Email }}</p>
                            </td>
                            <td>
                                <p>{{ $i->Mobile }}</p>
                            </td>
                            <td>
                                <p>
                                    @if ($i->status == 'Active')
                                        <button class="btn btn-success disabled">Activated</button>
                                    @else
                                        <button class="btn btn-danger disabled">Deactivated</button>
                                    @endif
                                </p>
                            </td> 
                            <td>
                                @if ($i->status == 'Active')
                                    <p><a href={{ url('/admin/remove-staff/' . $i->id . '/Deactivate') }}><button
                                                class="btn btn-danger">Deactivate</button></a></p>
                                @else
                                    <p><a href={{ url('/admin/remove-staff/' . $i->id . '/Active') }}><button
                                                class="btn btn-success">Activate</button>
                                @endif
                                </a></p>
                            </td>
                        </tr>
                    @endforeach
        <!-- <ul>
            @foreach($data as $i)
            <li>{{$i->prefix}}</li>
            <li>{{$i->FullName}}</li>
            <li>{{$i->DOB}}</li>
            <li>{{$i->gender}}</li>
            <li>{{$i->MaritalStatus}}</li>
            <li>{{$i->FatherName}}</li>
            <li>{{$i->MotherName}}</li>
            <li>{{$i->GaurdianName}}</li>
            <li>{{$i->RelationWithGuardian}}</li>
            <li>{{$i->Nationality}}</li>
            <li>{{$i->ResidentialStatus}}</li>
            <li>{{$i->OccupationType}}</li>
            <li>{{$i->religion}}</li>
            <li>{{$i->category}}</li>
            <li>{{$i->CustomerType}}</li>
            <li>{{$i->Disability}}</li>
            <li>{{$i->Qualification}}</li>
            <li>{{$i->PanNumber}}</li>
            <li>{{$i->Mobile}}</li>
            <li>{{$i->Email}}</li>
            <li>{{$i->Telephone}}</li>
            <li>{{$i->AddressProof}}</li>
            <li>{{$i->AddressProofNumber}}</li>
            <li>{{$i->issuedBy}}</li>
            <li>{{$i->AddressType}}</li>
            <li>{{$i->Address}}</li>
            <li>{{$i->City}}</li>
            <li>{{$i->District}}</li>
            <li>{{$i->State}}</li>
            <li>{{$i->Pin}}</li>
            <li>{{$i->Country}}</li>
            <li>{{$i->Place}}</li>
            <li>{{$i->signDate}}</li>
            <li>{{$i->ApplicantPhoto}}</li>
            <li>{{$i->ApplicantSignature}}</li>
            <li>{{$i->ApplicantAadhar}}</li>
            @endforeach
        </ul> -->
    </div>
@endsection