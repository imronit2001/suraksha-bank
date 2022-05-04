@extends('admin.home')
@section('title','Manage Customer')
@section('page-name')
<div class="staff-body">
    <div class="staff-heading">
        <h1 class="bankname text-center font-weight-bold">Suraksha Bank</h1>
        <!-- <h1 class="branchname text-center font-weight-light">Branch Name : Kolkata</h1> -->
        <h1 class="title text-center">Customer Details</h1>
        <div class="searchbox">
            <form>
                <input type="text" class="form-control" placeholder="Customer a/c no">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
            <form>
                <input type="text" class="form-control" placeholder="Customer Id">
                <button type="submit" class="btn btn-success">Search</button>
            </form>
            <form>
                <input type="text" class="form-control" placeholder="Customer Aadhar No">
                <button type="submit" class="btn btn-info">Search</button>
            </form>
        </div>
    </div>
    <div class="customer-short-info">
        <div class="customer-img">
            <img class="pic" src={{asset('images/ronit.JPG')}} alt="">
            <!-- <img class="sign" src="images/signature.webp" alt=""> -->
        </div>
    </div>
    <h1 class="text-center customer-name">Ronit Singh</h1>
    <h2 class="text-center customer-balance">Available Balance : 1,52,000 INR</h2>
    <div class="customer-detail">
        <div class="row">
            <p>Account Type </p>
            <p>Savings</p>
        </div>
        <div class="row">
            <p>CIF No </p>
            <p>85778415237</p>
        </div>
        <div class="row">
            <p>Customer Id </p>
            <p>15201219026</p>
        </div>
        <div class="row">
            <p>Account No </p>
            <p>12345678901234</p>
        </div>
        <div class="row">
            <p>Date of Birth </p>
            <p>03rd August 2001</p>
        </div>
        <div class="row">
            <p>Address </p>
            <p>H/No 182/1 , Sthirpara Road, P.O : MondalPara</p>
        </div>
        <div class="row">
            <p>IFSC Code </p>
            <p>BKID0004247</p>
        </div>
        <div class="row">
            <p>Branch </p>
            <p>Kolkata</p>
        </div>
        <div class="row">
            <p>Contact </p>
            <p>7003622801</p>
        </div>
        <div class="row">
            <p>Date of issue </p>
            <p>22/03/2021</p>
        </div>
        <div class="row">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#credit">+ Credit Money</button>
            <button class="btn btn-info">- Debit Money</button>
        </div>
    </div>
    <div class="customer-detail">
        <div class="row">
            <a class="text-center" href="{{route('admin-customer-transaction-detail')}}">Transaction Details</a>
        </div>
    </div>
</div>
@endsection