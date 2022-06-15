@extends('customer.homesidenav')
@section('title', 'Change Password')
@section('page-name')
    <div class="container justify-content-center tran-pass ">
        <div class="d-flex justify-content-center align-item-center mt-10 p-5 ">
            <form method="post">
                @csrf
                <h2>Change Password</h2>
                <div class="form-group mt-4">
                    <label for="formGroupExampleInput">Current Password</label>
                    <input type="password" class="form-control" required name="current_password" id=""
                        placeholder="Current Password">
                </div>
                <div class="form-group mt-4">
                    <label for="formGroupExampleInput">New Password</label>
                    <input type="password" class="form-control" required name="new_password" id="" placeholder="Enter Password">
                </div>
                <div class="form-group mt-3">
                    <label for="formGroupExampleInput2">Confirm Password</label>
                    <input type="password" class="form-control" required name="confirm_password" id=""
                        placeholder="Confirm Password">
                </div>
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif

                <div class="form-group text-center mt-5">
                    <button type="submit" class="btn btn-block">Change Password</button>
                </div>
            </form>
        </div>
    </div>
@endsection
