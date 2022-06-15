
@extends('admin.home')
@section('title','Cheque Book List')
@section('page-name')
<div class="add-branch btn-primary col-3   float-right m-3 p-2">
   {{-- <a href="{{route('admin-add-branch')}}"> <div class="button btn-block text-white " >Add Branch</div>
   </div></a> --}}
    <div class="table-responsive ml-2 pl-2">
        <table class="container table">
        <thead>
            <tr class="coloum">
                <th scope="col">Customer ID</th>
                <th scope="col">Account No</th>
                <th scope="col">Account Type</th>
                <th scope="col">Branch</th>
                <th scope="col">No of Cheque Books</th>
                <th scope="col">No of Cheque leaves</th>
                <th scope="col">Address</th>
                <th scope="col">Status</th>
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
                    <a href="{{ url('admin/remove-branch',$chq->id)}}" class="btn btn-danger btn-sm">DELETE</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
@endsection

