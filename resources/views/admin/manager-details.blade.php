@extends('admin.home')
@section('title','Manager Detail')
@section('page-name')
<div class="staff-body">
    <div class="staff-heading">
        <h1 class="bankname text-center font-weight-bold">Suraksha Bank</h1>
        <div class="searchbox">
            <form>
                <input type="text" class="form-control" placeholder="Enter Staff Name or Id" value="{{$manager->userid}}">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
    <div class="profile-body">
        <div class="staff-info">
            <div class="staff-info-heading">
                <img src={{asset('images/customer.png')}} alt="">
                <h1>Manager Info</h1>
            </div>
            <div class="staff-info-block2">
                <div class="staff-info-block2-left">
                    <img src={{asset($manager->photo)}} alt="">
                </div>
                <div class="staff-info-block2-mid">
                    <h1 class="staffname">{{$manager->designation." ".$manager->firstName." ".$manager->middleName." ".$manager->lastName}}</h1>
                    <h1 class="stafftype">Branch : {{$manager->branchName}}</h1>
                    <h1 class="staffid">User Id : {{$manager->userid}}</h1>
                </div>
                <div class="staff-info-block2-right">
                    <p>Contact : {{$manager->contact}}</p>
                    <p>Email Id : {{$manager->email}}</p>  
                </div>
            </div>
        </div>
        <div class="staff-address">
            <div class="staff-info-heading">
                <img src={{asset('images/customer.png')}} alt="">
                <h1>Addresses</h1>
            </div>
            <div class="staff-address-block">
                <p>{{$manager->address}}</p>
                <p>{{$manager->city}}</p>
                <p>Pin Code : {{$manager->pincode}}</p>
                <p>{{$manager->state}}</p>
            </div>
        </div>
        <div class="staff-more-detail">
            <div class="staff-info-heading">
                <img src={{asset('images/customer.png')}} alt="">
                <h1>More Details</h1>
            </div>
            <div class="staff-more-detail-block">
                <p>Date of Birth : {{$manager->dob}}</p>
                <p>Gender : {{$manager->gender}}</p>
                <p>Marital Status : {{$manager->maritalStatus}}</p>
                <p>Nationality : Indian</p>
                <p>Category : {{$manager->category}}</p>
                <p>Disability : {{$manager->disability}}</p>
                <p>Educational Qualification : {{$manager->qualification}}</p>
                <p>Aadhar Number : {{$manager->aadharNo}}</p>
                {{-- <p>Status : Active</p> --}}
            </div>
        </div>
        <div class="bottom-button">
            <a href={{ url('/admin/edit-manager', $manager->id) }}><button class="btn btn-primary">Edit Profile</button></a>
            <button class="btn btn-danger disabled">Remove Manager</button>
        </div>
    </div>
</div>
@endsection