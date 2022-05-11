@extends('admin.home')
@section('title','Staff Detail')
@section('page-name')
<div class="staff-body">
    <div class="staff-heading">
        <h1 class="bankname text-center font-weight-bold">Suraksha Bank</h1>
        <h1 class="branchname text-center font-weight-light">Branch Name : Kolkata</h1>
        <div class="searchbox">
            <form>
                <input type="text" class="form-control" placeholder="Enter Staff Name or Id" value="{{$staff->userid}}">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
    <div class="profile-body">
        <div class="staff-info">
            <div class="staff-info-heading">
                <img src={{asset('images/customer.png')}} alt="">
                <h1>Staff Info</h1>
            </div>
            <div class="staff-info-block2">
                <div class="staff-info-block2-left">
                    <img src={{asset($staff->photo)}} alt="">
                </div>
                <div class="staff-info-block2-mid">
                    <h1 class="staffname">{{$staff->designation." ".$staff->firstName." ".$staff->middleName." ".$staff->lastName}}</h1>
                    <h1 class="stafftype">Type : {{$staff->empType}}</h1>
                    <h1 class="staffid">User Id : {{$staff->userid}}</h1>
                </div>
                <div class="staff-info-block2-right">
                    <p>Contact : {{$staff->contact}}</p>
                    <p>Email Id : {{$staff->email}}</p>  
                </div>
            </div>
        </div>
        <div class="staff-address">
            <div class="staff-info-heading">
                <img src={{asset('images/customer.png')}} alt="">
                <h1>Addresses</h1>
            </div>
            <div class="staff-address-block">
                <p>{{$staff->address}}</p>
                <p>{{$staff->city}}</p>
                <p>District : {{$staff->district}} , Pin Code : {{$staff->pinode}}</p>
                <p>{{$staff->state}}</p>
            </div>
        </div>
        <div class="staff-more-detail">
            <div class="staff-info-heading">
                <img src={{asset('images/customer.png')}} alt="">
                <h1>More Details</h1>
            </div>
            <div class="staff-more-detail-block">
                <p>Date of Birth : {{$staff->dob}}</p>
                <p>Gender : {{$staff->gender}}</p>
                <p>Marital Status : {{$staff->maritalStatus}}</p>
                <p>Guardian Name : {{$staff->guardianName}}</p>
                <p>Nationality : Indian</p>
                <p>Category : {{$staff->category}}</p>
                <p>Disability : {{$staff->disability}}</p>
                <p>Educational Qualification : {{$staff->qualification}}</p>
                <p>Aadhar Number : {{$staff->aadharNo}}</p>
                <p>Pan Number : {{$staff->panNo}}</p>
                {{-- <p>Status : Active</p> --}}
            </div>
        </div>
        <div class="staff-document">
            <div class="staff-info-heading">
                <img src={{asset('images/customer.png')}} alt="">
                <h1>Documents</h1>
            </div>
            <div class="staff-document-block">
                <div class="doc">
                    <img src={{asset($staff->aadharFile)}} alt="">
                </div>
                <div class="doc">
                    <img src={{asset($staff->panFile)}} alt="">
                </div>
            </div>
        </div>
        <div class="bottom-button">
            <a href={{ url('/admin/edit-staff', $staff->id) }}><button class="btn btn-primary">Edit Profile</button></a>
            <button class="btn btn-danger disabled">Remove Staff</button>
        </div>
    </div>
</div>
@endsection