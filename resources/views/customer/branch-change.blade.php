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
                    <select class="form-control d-block" name="aType" id="">
                        <option>Saving Account</option>
                        <option>Current Account</option>
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="formGroupExampleInput2">Account Number:</label>
                        <input type="password" required name="aNo" class="form-control" id="" placeholder="Account Number">
                    </div>
                    <div class="form-group col">
                        <label for="formGroupExampleInput2">Customer Id:</label>
                        <input type="password" required name="cId" class="form-control" id="" placeholder="Customer Id">
                    </div>

                </div>
                <div class="row ">
                    <div class="form-group col">
                        <label for="formGroupExampleInput2">Current Branch Name:</label>
                        <select class="form-control" required name="branchName">
                            <option class="hidden" selected disabled>Branch Name *</option>
                            <option value="Kolkata">Kolkata</option>
                            <option value="Hooghly">Hooghly</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="formGroupExampleInput2">Current Branch Code:</label>
                        <input type="password" required name="branchCode" class="form-control" id="" placeholder="Branch Code">
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col text-truncate">
                        <label for="formGroupExampleInput2">New Branch:</label>
                        <select class="form-control" required name="newBranchName">
                            <option class="hidden" selected disabled>Select Branch *</option>
                            <option value="Kolkata">Kolkata</option>
                            <option value="Hooghly">Hooghly</option>
                        </select>                    </div>
                    <div class="form-group col text-truncate">
                        <label for="formGroupExampleInput2">New Branch Code:</label>
                        <input type="text" required name="newBranchCode" class="form-control" id="" placeholder="New Branch">
                    </div>

                </div>
                {{-- <div class="row ">
                    <div class="form-group col">
                        <label for="formGroupExampleInput2">City:</label>
                        <input type="text" name="City" class="form-control" id="" placeholder="City">
                    </div>
                    <div class="form-group col text-truncate">
                        <label for="formGroupExampleInput2">State*:</label>
                        <input type="text" name="State" class="form-control" id="" placeholder="State">
                    </div>
                </div> --}}
                <div class="row">
                    <div class="form-group col">
                        <label for="">Reason</label>
                        <textarea name="reason" required id="" cols="" rows="" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group justify-content-center mt-3">
                    <button type="submit" class="btn btn-block">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
