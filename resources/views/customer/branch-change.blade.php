@extends('customer.homesidenav')
@section('title','Branch Change')
@section('page-name')
<div class="container  Branch ">
        <div class="d-flex flex-wrap justify-content-center align-item-center ">
            <form>
                <h2>Change Branch</h2>
                <div class="form-group mt-4">
                    <label for="sel1">Select Account:</label>
                    <select class="form-control d-block" id="sel1">
                        <option>Saving Account</option>
                        <option>Current Account</option>
                    </select>
                </div>
                <div class="row mt-1">
                    <div class="form-group col">
                        <label for="formGroupExampleInput2">Account Number:</label>
                        <input type="password" class="form-control" id="" placeholder="Confirm Password">
                    </div>
                    <div class="form-group col">
                        <label for="formGroupExampleInput2">Account Type:</label>
                        <input type="password" class="form-control" id="" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="form-group col">
                        <label for="formGroupExampleInput2">Branch Name:</label>
                        <input type="password" class="form-control" id="" placeholder="Confirm Password">
                    </div>
                    <div class="form-group col text-truncate">
                        <label for="formGroupExampleInput2">Enter New Branch Code *:</label>
                        <input type="password" class="form-control" id="" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-group justify-content-center mt-3">
                    <button type="button" class="btn btn-block">GET BRANCH NAME</button>
                </div>
            </form>
        </div>
    </div>
@endsection