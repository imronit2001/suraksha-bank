@extends('staff.home')
@section('title', 'Fixed Deposite List')
@section('page-name')

    <div class="staff-body">
        <div class="staff-heading p-1">
            <h4 class="bankname text-center font-weight-bold">Suraksha Bank</4>
                <h4 class="branchname text-center font-weight-light">Branch Name : {{ Auth::user()->branch }}</h4>
                <h4 class="title text-center">Fixed Deposite Request</h4>
        </div>
        <div class="table table-responsive container-fluid mt-3" width="100px">
            <table class="table table-hover  table-bordered table-sm" width='100%' cellspacing="0"
                style="overflow-x: auto;margin:0">
                <thead>
                    <tr class="coloum text-align-center">
                        <th scope="col">Customer ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Account No</th>
                        <th scope="col">Branch</th>
                        <th scope="col">City</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Interest Type</th>
                        <th scope="col">Year</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Nominee</th>
                        <th scope="col">Nominee Relation with Depositer</th>
                        <th scope="col">Nominee Aadhar No</th>
                        <th scope="col">Pan </th>
                        <th scope="col">Accept</th>
                        <th scope="col">Decline</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fixed as $chq)
                        <tr>
                            <td>{{ $chq->c_id }}</td>
                            <td>{{ $chq->c_name }}</td>
                            <td>{{ $chq->account_no }}</td>
                            <td>{{ $chq->branch_name }}</td>
                            <td>{{ $chq->branch_city }}</td>
                            <td>{{ $chq->amount }}</td>
                            <td>{{ $chq->interest_type }}</td>
                            <td>{{ $chq->year }}</td>
                            <td>{{ $chq->email }}</td>
                            <td>{{ $chq->phone }}</td>
                            <td>{{ $chq->nominee }}</td>
                            <td>{{ $chq->nominee_relation }}</td>
                            <td>{{ $chq->nominee_aadharNo }}</td>
                            <td>{{ $chq->pan }}</td>
                            <td><a href={{ url('/staff/fixed-deposite-decline/' . $chq->id ) }}><button
                                        class="btn btn-danger">Decline</button></a></td>
                            <td>
                                <a href={{ url('/staff/fixed-deposite-approve/' . $chq->id ) }}><button
                                        class="btn btn-success">Accept</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
