@extends('customer.homesidenav')
@section('title','Branch Change')
@section('page-name')
<div class="container  Branch ">
        <div class="d-flex flex-wrap justify-content-center align-item-center "> 
             
            <form method="POST" action="" enctype="multipart/form-data">
               @csrf
               <h2>Change Branch</h2>
                <div class="form-group mt-4">
                    <label for="sel1">Select Account:</label>
                    <select class="form-control d-block" name="AccountType" id="">
                        <option>Saving Account</option>
                        <option>Current Account</option>
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="formGroupExampleInput2">Account Number:</label>
                        <input type="password" name="AccountNumber" class="form-control" id="" placeholder="Account Number">
                    </div>
                    <div class="form-group col">
                        <label for="formGroupExampleInput2">Branch Code:</label>
                        <input type="password" name="BranchCode" class="form-control" id="" placeholder="Branch Code">
                    </div>
                </div>
                <div class="row ">
                    <div class="form-group col">
                        <label for="formGroupExampleInput2">Branch Name:</label>
                        <input type="text" name="CurrentBranch" class="form-control" id="" placeholder="Current Branch">
                    </div>
                    <div class="form-group col text-truncate">
                        <label for="formGroupExampleInput2">Enter New Branch *:</label>
                        <input type="text" name="NewBranch" class="form-control" id="" placeholder="New Branch">
                    </div>
                </div>
                <div class="row ">
                    <div class="form-group col">
                        <label for="formGroupExampleInput2">City:</label>
                        <input type="text" name="City" class="form-control" id="" placeholder="City">
                    </div>
                    <div class="form-group col text-truncate">
                        <label for="formGroupExampleInput2">State*:</label>
                        <input type="text" name="State" class="form-control" id="" placeholder="State">
                    </div>
                </div>
                <div class="form-group justify-content-center mt-3">
                    <button type="submit" class="btn btn-block">GET BRANCH NAME</button>
                </div>
            </form>
        </div>
    </div>
@endsection