@extends('customer.homesidenav')
@section('title','Cheque Book')
@section('page-name')
<div id="chequeBook">
        <div class="container-fluid justify-content-center align-item-center">
            <div class="col-lg-12">
                <div class="wrapper rounded">
                    <div class="title">Cheque Book Request</div>
                    <div class="d-flex row justify-content-between align-items-center mt-3">
                        <ul class="nav nav-tabs w-75">
                            <li class="nav-item"> <a class="nav-link active" href="#">Request</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">History</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Account No.</th>
                                <th>Account type</th>
                                <th>Branchname</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{Auth::user()->account_no}}</td>
                                <td>Saving</td>
                                <td>{{Auth::user()->BranchName}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="" method="post">
                        @csrf
                    <div class="row">
                        <div class="col-4">
                            <label>Number of chequeBooks</label>
                            <select name="no_of_chequeBoook" id="" class="form-control">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label>Number of chequeLeaves</label>
                            <select name="no_of_chequeLeaves" id="" class="form-control">
                                <option value="1">20</option>
                                <option value="1">50</option>
                                <option value="1">100</option>
                                <option value="1">200</option>
                            </select>
                        </div>
                    </div>
                    <div class=""><label for="">Delivery Address</label>
                        <input type="text" name="address"></div>
                    <div class="form-group">
                        <input type="checkbox"><label for=""> I agree to pay cheque book charges as applicable and the same will be deducted from my account</label>
                    </div>
                    <div class="btn-box  mx-6 d-flex justify-space-between">
                        {{-- <button type="button" class="form-control  mx-2" id=""><span>Change Address</span></button> --}}
                        <button type="submit" class="form-control mx-2" id="">Confirm</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
