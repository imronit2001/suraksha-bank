@extends('customer.homesidenav')
@section('title', 'Branch Change')
@section('page-name')
    <div class="container  Branch m-0">
        <div class="d-flex flex-wrap justify-content-center align-item-center ">

            @if ($status == '-1' || $status == '3')

                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <h2 class="m-2">Change Branch</h2>
                    <div class="row">
                        <div class="form-group col text-truncate w-50">
                            <label for="formGroupExampleInput2">New Branch Code:</label>
                            <select class="form-control" required name="newBranchCode">
                                <option selected disabled>Branch Code</option>
                                @foreach ($branch as $br)
                                    @if ($br->branch_id_prefix . $br->branch_code != 'SKB1')
                                        <option value="{{ $br->branch_id_prefix . ' ' . $br->branch_code }}">
                                            {{ $br->branch_id_prefix . ' ' . $br->branch_code }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col text-truncate w-50">
                            <label for="formGroupExampleInput2">New Branch Name:</label>
                            <select class="form-control" required name="newBranchName">
                                <option selected disabled>Branch Name</option>
                                @foreach ($branch as $br)
                                    @if ($br->branch_id_prefix . $br->branch_code != 'SKB1')
                                        <option value="{{ $br->branch_name }}">{{ $br->branch_name }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="">Reason</label>
                            <textarea name="reason" required id="" cols="" rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group justify-content-center mt-3">
                        <button type="submit" class="btn btn-block">Save</button>
                    </div>
                </form>
            @elseif($status == '0')
                <form action="" class="mt-5">

                    <h1 class="blockquote text-center text-info">Your have already applied</h1>
                    <p class="text-center">Your Application is under process</p>
                </form>
            @elseif($status == '1')
                <div  class="mt-5">

                    <h1 class="blockquote text-center text-success">Your application has been verified and approved</h1>
                    <p class="text-center">Thank You</p>
                    <a href="{{ url('/customer/branch-change-reset/'.$status_id) }}" class="text-center m-auto"><button
                            class="btn btn-primary m-auto w-50 text-center" id="apply1">Apply Again?</button></a>
                </div>
            @elseif($status == '2')
                <div  class="mt-5">

                    <h1 class="blockquote text-center text-danger">Your application has been rejected</h1>
                    <p class="text-center">Please apply again with proper details.. </p>
                    <a href={{ url('/customer/branch-change-reset/'.$status_id) }} class="text-center m-auto"><button
                            class="btn btn-primary m-auto w-50 text-center" id="apply2">Apply Again?</button></a>
                </div>

            @endif
        </div>
    </div>
@endsection
