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
                        <th scope="col">Accept</th>
                        <th scope="col">Decline</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cheque as $chq)
                        <tr>
                            <td>{{ $chq->customerId }}</td>
                            <td>{{ $chq->accountNo }}</td>
                            <td>{{ $chq->accountType }}</td>
                            <td>{{ $chq->branchName }}</td>
                            <td>{{ $chq->no_of_chequeBook }}</td>
                            <td>{{ $chq->no_of_chequeLeaves }}</td>
                            <td>{{ $chq->address }}</td>
                            <td><a href={{ url('/staff/cheque-book-approve/'. $chq->id) }}><button
                                        class="btn btn-success">Accept</button>
                                </a></td>
                            <td><a href={{ url('/staff/cheque-book-decline/'. $chq->id ) }}><button
                                        class="btn btn-danger">Decline</button>
                                </a></td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
