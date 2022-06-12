@extends('customer.homesidenav')
@section('title','Account Details')
@section('page-name')
<div class="customer-body">
    <div class="Customer-heading ">
        <h1 class="bankname text-center font-weight-bold">Suraksha Bank</h1>
        <h4 class="branchname text-center font-weight-light">Branch Name : Kolkata</h4>
        <h3 class="title text-center">Account Details</h3>
    </div>
    <div class="customer-main mx-2">
        <div class="card flex-row flex-wrap d-flex m-3">
            <div class="customer-info flex-wrap ">
                <img src="../images/employee.png" class="float-left img-fluid m-3" width="120px" alt="">
                <div class="float-left card-body ">
                    <h3 class="card-title">Hi,{{$customer->customerName}} </h3>
                    <p class="card-para">Your account summary</p>
                    <button class="btn btn-block btn-info">Update Details</button>
                </div>
            </div>
            <div class="card-block customer-type border-white p-4 flex-wrap ">
                <p>Account Number : {{$customer->accountNo}}</p>
                <p>Customer Id : {{$customer->customerName}}</p>
                <p>Account Type : {{$customer->customerName}}</p>
                <p>Aadhar No : {{$customer->aadharNo}}</p>
                <p>Account Balance : {{$customer->balance}} INR</p>
            </div>
        </div>
        <div class="customerAddress m-2">
            <div class="address-info d-flex p-2">
                <img src="../images/house.png" width="40px" alt="">
                <h2>Address</h2>
            </div>
            <div class="address-details m-2 p-3 text-alignment-center">
                <p class="tab">Address : <span>&nbsp;</span>{{$customer->address}}</p>
                <p class="tab">City : <span>&nbsp;</span> {{$customer->city}}</p>
                <p class="tab">State : <span>&nbsp;</span>{{$customer->state}}</p>
                <p class="tab">Postal code : <span>&nbsp;</span>{{$customer->pin}}</p>
            </div>
            <div class="contact-details m-2">
                <div class="address-info d-flex p-2 border-primary">
                    <img src="../images/communicate.png" width="40px" alt="">
                    <h2>Contact</h2>
                </div>
                <div class="address-details  p-3 text-alignment-center mb-4">
                    <p>mobile No : {{$customer->customerName}}</p>
                    <p>Gmail : {{$customer->customerName}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection