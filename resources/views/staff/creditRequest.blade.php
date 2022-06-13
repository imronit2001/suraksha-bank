@extends('staff.home')
@section('title', 'Credit Card Application List')
@section('page-name')
    <div>
        <ul>
            @foreach($data as $i)
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
            @endforeach
        </ul>
    </div>
@endsection