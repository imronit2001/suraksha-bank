@extends('staff.home')
@section('title', 'Fixed Deposite List')
@section('page-name')

<div class="staff-body">
    <div class="staff-heading p-1">
        <h4 class="bankname text-center font-weight-bold">Suraksha Bank</4>
        <h4 class="branchname text-center font-weight-light">Branch Name : {{Auth::user()->branch}}</h4>
        <h4 class="title text-center">Cheque Book Request</h4>
    </div>
    <div class="table table-responsive container-fluid mt-3" width="100px">
        <table class="table table-hover  table-bordered table-sm" width='100%' cellspacing="0" style="overflow-x: auto;margin:0">
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
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fixed as $chq)
                <tr>
                    <td>{{$chq->c_id}}</td>
                    <td>{{$chq->c_name}}</td>
                    <td>{{$chq->account_no}}</td>
                    <td>{{$chq->branch_name}}</td>
                    <td>{{$chq->branch_city}}</td>
                    <td>{{$chq->amount}}</td>
                    <td>{{$chq->interest_type}}</td>
                    <td>{{$chq->year}}</td>
                    <td>{{$chq->email}}</td>
                    <td>{{$chq->phone}}</td>
                    <td>{{$chq->nominee}}</td>
                    <td>{{$chq->nominee_relation}}</td>
                    <td>{{$chq->nominee_aadharNo}}</td>
                    <td>{{$chq->pan}}</td>
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
