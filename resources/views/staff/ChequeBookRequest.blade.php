@extends('staff.home')
@section('title', 'Chequebook Request List')
@section('page-name')

<div class="staff-body">
    <div class="staff-heading p-1">
        <h4 class="bankname text-center font-weight-bold">Suraksha Bank</4>
        <h4 class="branchname text-center font-weight-light">Branch Name : Kolkata</h4>
        <h4 class="title text-center">Cheque Book Request</h4>
    </div>
    <div class="staff-table container-fluid mt-3">
        <table class="table table-hover">
            <thead>
                <tr class="coloum text-align-center">
                    <th scope="col">Customer ID</th>
                    <th scope="col">Account No</th>
                    <th scope="col">Account Type</th>
                    <th scope="col">Branch</th>
                    <th scope="col">No of Cheque Books</th>
                    <th scope="col">No of Cheque leaves</th>
                    <th scope="col">Address</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cheque as $chq)
                <tr>
                    <td>{{$chq->customerId}}</td>
                    <td>{{$chq->accountNo}}</td>
                    <td>{{$chq->accountType}}</td>
                    <td>{{$chq->branchName}}</td>
                    <td>{{$chq->no_of_chequeBook}}</td>
                    <td>{{$chq->no_of_chequeLeaves}}</td>
                    <td>{{$chq->address}}</td>
                    <td>{{$chq->status}}</td>
                        <td>
                            <p>
                                @if ($chq->status == 'Active')
                                    <button class="btn btn-success disabled">Pending</button>
                                @else
                                    <button class="btn btn-danger disabled">Declined</button>
                                @endif
                            </p>
                        </td>
                        <td>
                            @if ($chq->status == 'Active')
                                <p><a href={{ url('/staf/cheque-book/' . $chq->id . '/Declined') }}><button
                                            class="btn btn-danger">Declined</button></a></p>
                            @else
                                <p><a href={{ url('/staf/cheque-book/' . $chq->id . '/Accepted') }}><button
                                            class="btn btn-success">Accepted</button>
                            @endif
                            </a></p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
