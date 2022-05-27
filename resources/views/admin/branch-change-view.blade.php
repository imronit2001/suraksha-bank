@extends('admin.home')
@section('title','Branch Change')
@section('page-name')
<div class="staff-body">
    <div class="staff-heading">
        <h1 class="bankname text-center font-weight-bold">Suraksha Bank</h1>
        <!-- <h1 class="branchname text-center font-weight-light">Branch Name : Kolkata</h1> -->
        <h1 class="title text-center">Branch Change Applications</h1>
        <div class="searchbox">
            <form>
                <input type="text" class="form-control" placeholder="Enter Customer Id">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
    <table>
        <tr>
            <th>Account Number</th>
            <td>{{ $applications->aNo }}</td>
        </tr>
        <tr>
            <th>Customer Id</th>
            <td>{{ $applications->cId }}</td>
        </tr>
        <tr>
            <th>Current Branch</th>
            <td>{{ $applications->branchName }}</td>
        </tr>
        <tr>
            <th>New Branch Name</th>
            <td>{{ $applications->newBranchName }}</td>
        </tr>
        <tr>
            <th>Reason</th>
            <td>{{ $applications->reason }}</td>
        </tr>
        <tr>
            <th><a href=""><button class="btn btn-primary">Approve</button></a></th>
            <th><a href=""><button class="btn btn-primary">Decline</button></a></th>
        </tr>
    </table>
</div>
@endsection
