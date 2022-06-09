@extends('customer.homesidenav')
@section('title','Fund Transfer')
@section('page-name')
<section class="home-section">
        <div class="main-box">
            <h1>Send Money to Another Account</h1>
            <form action="" method="post">
                @csrf
                <div class="form-floating w-75 min-width-75 mb-3">
                    <input type="text" class="form-control transparent-input" id="floatingInput"
                        placeholder="Account Holder's Name">
                    <label for="floatingInput">Account Holder's Name</label>
                </div>
                <div class="form-floating w-75 min-width-75 mb-3">
                    <input type="text" class="form-control transparent-input" id="floatingInput"
                        placeholder="Enter Account Number">
                    <label for="floatingInput">Enter Account Number</label>
                </div>
                <div class="form-floating w-75 min-width-75 mb-3">
                    <input type="password" class="form-control transparent-input" id="floatingInput"
                        placeholder="Re-Enter Account Number">
                    <label for="floatingInput">Re-Enter Account Number</label>
                </div>
                <div class="form-floating w-75 min-width-75 mb-3">
                    <input type="text" class="form-control transparent-input w-50 min-width-50" id="floatingInput"
                        placeholder="IFSC CODE">
                    <label for="floatingInput">IFSC CODE</label>
                </div>
                <div class="form-floating w-50 min-width-50 mb-3">
                    <input type="text" class="form-control transparent-input" id="floatingInput"
                        placeholder="Branch Name">
                    <label for="floatingInput">Branch Name</label>
                </div>
                <div class="form-floating w-50 min-width-50 mb-3">
                    <input type="text" class="form-control transparent-input" id="floatingInput"
                        placeholder="Enter Amount">
                    <label for="floatingInput">Enter Amount</label>
                </div>
                <div class="form-floating mb-3 w-25 min-width-25">
                    <input type="text" class="form-control transparent-input" id="floatingInput"
                        placeholder="UPI PIN">
                    <label for="floatingInput">UPI PIN</label>
                </div>
                <button class="btn btn-success m-auto">Submit</button>
            </form>
        </div>
    </section>
@endsection