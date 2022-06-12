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
                <tr class="text-dark bg-info">
                    <th scope="col" class="smallwidth">Customer Id</th>
                    <th scope="col" class="smallwidth">Customer Name</th>
                    <th scope="col" class="smallwidth">Application</th>
                    <th scope="col" class="smallwidth">Application Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $cb)
                    <tr class="align-center">
                        <td>
                            <p>{{ $cb->c_id }}</p>
                        </td>
                        <td>
                            <p>{{ $cb->cname }}</p>
                        </td>
                        <td>
                            <p>{{ $cb->application }}</p>
                        </td>
                        <td>
                            <p>{{ $cb->date }}</p>
                        </td>
                        <td>
                            <p>
                                @if ($cb->status == 'Active')
                                    <button class="btn btn-success disabled">Pending</button>
                                @else
                                    <button class="btn btn-danger disabled">Declined</button>
                                @endif
                            </p>
                        </td>
                        <td>
                            @if ($cb->status == 'Active')
                                <p><a href={{ url('/staf/cheque-book/' . $cb->id . '/Declined') }}><button
                                            class="btn btn-danger">Declined</button></a></p>
                            @else
                                <p><a href={{ url('/staf/cheque-book/' . $cb->id . '/Accepted') }}><button
                                            class="btn btn-success">Accepted</button>
                            @endif
                            </a></p>
                        </td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
</div>

@endsection
