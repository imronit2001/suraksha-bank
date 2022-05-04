@extends('admin.home')
@section('title','Staff Detail')
@section('page-name')
<div class="staff-body">
    <div class="staff-heading">
        <h1 class="bankname text-center font-weight-bold">Suraksha Bank</h1>
        <h1 class="branchname text-center font-weight-light">Branch Name : Kolkata</h1>
        <div class="searchbox">
            <form>
                <input type="text" class="form-control" placeholder="Enter Staff Name or Id" value="Ronit Singh">
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
                    <img src={{asset('images/ronit.JPG')}} alt="">
                </div>
                <div class="staff-info-block2-mid">
                    <h1 class="staffname">Mr Ronit Singh</h1>
                    <h1 class="stafftype">Type : Full Time</h1>
                    <h1 class="staffid">Staff Id : 15201219026</h1>
                </div>
                <div class="staff-info-block2-right">
                    <p>Contact : 7003622801</p>
                    <p>Email Id : ronitsingh7003@gmail.com</p>  
                </div>
            </div>
        </div>
        <div class="staff-address">
            <div class="staff-info-heading">
                <img src={{asset('images/customer.png')}} alt="">
                <h1>Addresses</h1>
            </div>
            <div class="staff-address-block">
                <p>House No : 182/1</p>
                <p>Sthirpara Road , Dakshinpally More</p>
                <p>Post Office : Mondalpara</p>
                <p>Jagadal , District : North 24 Paragana , Kolkata - 743127</p>
            </div>
        </div>
        <div class="staff-more-detail">
            <div class="staff-info-heading">
                <img src={{asset('images/customer.png')}} alt="">
                <h1>More Details</h1>
            </div>
            <div class="staff-more-detail-block">
                <p>Date of Birth : 03rd August 2001</p>
                <p>Gender : Male</p>
                <p>Marital Status : Unmarried</p>
                <p>Guardian Name : Mr Abc Xyz</p>
                <p>Nationality : Indian</p>
                <p>Religion : Hinduism</p>
                <p>Category : General</p>
                <p>Disability : No</p>
                <p>Educational Qualification : Graduated</p>
                <p>Aadhar Number : 123456789012</p>
                <p>Pan Number : 1234Ron5</p>
                <p>Id Proof : Aadhar Card</p>
                <p>Id Number : 123456789012</p>
                <p>Status : Active</p>
            </div>
        </div>
        <div class="staff-document">
            <div class="staff-info-heading">
                <img src={{asset('images/customer.png')}} alt="">
                <h1>Documents</h1>
            </div>
            <div class="staff-document-block">
                <div class="doc">
                    <img src={{asset('images/aadhar1.webp')}} alt="">
                </div>
                <div class="doc">
                    <img src={{asset('images/pancard.webp')}} alt="">
                </div>
            </div>
        </div>
        <div class="bottom-button">
            <button class="btn btn-primary">Edit Profile</button>
            <button class="btn btn-danger">Remove Staff</button>
        </div>
    </div>
</div>
@endsection