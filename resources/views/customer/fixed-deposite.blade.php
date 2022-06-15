@extends('customer.homesidenav')
@section('title','Fixed Deposite')
@section('page-name')

<div class="customer-fixed-deposit">
  <div class="fixed-deposited">
    <h2>Fixed Deposit</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Account No</th>
          <th>Account Type</th>
          <th>Branch</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{Auth::user()->account_no}}</td>
          <td>Saving Account</td>
          <td>{{Auth::user()->BranchName}}</td>
        </tr>
      </tbody>
    </table>
      <form action="" method="post" id="">
        @csrf
        <div class="card">
            <div class="card-header bg-primary text-white">Personal Details</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Full name</label>
                            <input type="text" class="form-control" placeholder="Enter full name" name="c_name">
                            <span class="text-danger">
                                @error('c_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Account Number</label>
                            <input type="text" class="form-control" placeholder="Enter account number"
                                name="account_no">
                            <span class="text-danger">
                                @error('account_no')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Customer Id</label>
                            <input class="form-control" type="text" placeholder="Enter customer id" name="">
                            <span class="text-danger">
                                @error('c_id')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Branch Name</label>
                            <input type="text" class="form-control" placeholder="Enter branch name"
                                name="branch_name">
                            <span class="text-danger">
                                @error('branch_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Deposit Opening City</label>
                            <input type="text" class="form-control" placeholder="Enter City name"
                                name="branch_city">
                            <span class="text-denger">
                                @error('branch_city')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Amount</label>
                            <input type="text" class="form-control" placeholder="Enter amount" name="amount">
                            <span class="text-denger">
                                @error('amount')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><span>*</span>Interest Payout</label>
                            <select name="interest_type" class="form-control" wire:model="interest_type" id="">
                                <option value="monthly">Monthly</option>
                                <option value="Quaterly">Quaterly</option>
                                <option value="Half Yearly">Half Yearly</option>
                                <option value="Yearly">Yearly</option>
                            </select>
                            <span class="text-denger">
                                @error('interest_type')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Deposite Period</label>
                            <select class="form-control" name="year" wire:model="year">
                                <option value="">Choose year</option>
                                <option value="1">1</option>
                                <option value="1">3</option>
                                <option value="1">5</option>
                                <option value="1">10</option>
                            </select>
                            <span class="text-danger">
                                @error('year')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-header bg-primary text-white">Contacts & Nominee</div>
            <div class="card-body text-align-center flex-wrap justify-content-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="">Email Address</label>
                            <input type="text" class="form-control" placeholder="Enter email address"
                                name="email">
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" placeholder="Enter phone number" name="phone">
                            <span class="text-danger">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Name of Nominee</label>
                            <input type="text" class="form-control" placeholder="Enter nominee name"
                                name="nominee">
                            <span class="text-danger">
                                @error('nominee')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Relationship with Depositer</label>
                            <input class="form-control" placeholder="Relation with Nominee" type="text"
                                name="nominee_relation">
                            <span class="text-danger">
                                @error('nominee_relation')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nominee Aadhar Number</label>
                            <input type="text" class="form-control" placeholder="Enter nominee name"
                                name="nominee_aadharNo">
                            <span class="text-danger">
                                @error('nominee_aadharNo')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pan">Pan Number</label>
                        <input type="text" class="form-control" name="pan">
                        <span class="text-danger">
                            @error('pan')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit"  class=" btn btn-secondary " id="">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
@endsection
