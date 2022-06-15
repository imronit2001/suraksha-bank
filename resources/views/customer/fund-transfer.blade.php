@extends('customer.homesidenav')
@section('title','Fund Transfer')
@section('page-name')
<section class="home-section">
        <div class="main-box">
            @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <h1>Send Money to Another Account</h1>
            <form action="" method="post">
                @csrf
                <div class="form-floating w-75 min-width-75 mb-3">
                    <span class="text-danger">@error('beneficiary_name'){{ $message }}@enderror</span>
                    <input type="text" name="beneficiary_name"class="form-control transparent-input" id="floatingInput"
                        placeholder="Account Holder's Name">
                    <label for="floatingInput">Account Holder's Name</label>

                </div>
                <div class="form-floating w-75 min-width-75 mb-3">
                    <span class="text-danger">@error('beneficiary_name'){{ $message }}@enderror</span>
                    <input type="text" name="benficiary_accountno" class="form-control transparent-input" id="floatingInput"
                        placeholder="Enter Account Number">
                    <label for="floatingInput">Enter Account Number</label>
                </div>
                <div class="form-floating w-75 min-width-75 mb-3">
                    <span class="text-danger">@error('benficiary_accountno'){{ $message }}@enderror</span>
                    <input type="password" name="confirm_accountno"  class="form-control transparent-input" id="floatingInput"
                        placeholder="Re-Enter Account Number">
                    <label for="floatingInput">Re-Enter Account Number</label>
                </div>
                <div class="form-floating w-75 min-width-75 mb-3">
                    <span class="text-danger">@error('ifsc_code'){{ $message }}@enderror</span>
                    <input type="text" name="ifsc_code" class="form-control transparent-input w-50 min-width-50" id="floatingInput"
                        placeholder="IFSC CODE">
                    <label for="floatingInput">IFSC CODE</label>
                </div>
                <div class="form-floating w-50 min-width-50 mb-3">
                    <span class="text-danger">@error('branch'){{ $message }}@enderror</span>
                    <input type="text" name="branch" class="form-control transparent-input" id="floatingInput"
                        placeholder="Branch Name">
                    <label for="floatingInput">Branch Name</label>
                </div>
                <div class="form-floating w-50 min-width-50 mb-3">
                    <span class="text-danger">@error('amount'){{ $message }}@enderror</span>
                    <input type="text" name="amount" class="form-control transparent-input" id="floatingInput"
                        placeholder="Enter Amount">
                    <label for="floatingInput">Enter Amount</label>
                </div>
                <div class="form-floating mb-3 w-25 min-width-25">
                    <span class="text-danger">@error('upi_pin'){{ $message }}@enderror</span>
                    <input type="text" name="upi_pin" class="form-control transparent-input" id="floatingInput"
                        placeholder="UPI PIN">
                    <label for="floatingInput">UPI PIN</label>
                </div>
                <button class="btn btn-success m-auto" type="submit">Submit</button>
            </form>
        </div>
    </section>
@endsection
