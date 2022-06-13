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
          <td>{{cus--</td>
          <td>Saving Account</td>
          <td>Hooghly</td>
        </tr>
      </tbody>
    </table>
    <!-- <div class="step-row">
        <div id="progress"></div>
        <div class="step-col"><small>Step 1</small></div>
        <div class="step-col"><small>Step 2</small></div>
        <div class="step-col"><small>Step 3</small></div>
        <div class="step-col"><small>Step 4</small></div>
      </div>
      <form action="" id="form1">
        <div class="row form-group ">
          <div class="col-sm-4">
            <h6>Selected Account Number</h6>
          </div>
          <div class="col-sm-4">
            <p>6890246xxxx</p>
          </div>
        </div>
        <div class="form-group">
          <label for="">Deposit Opening City</label>
          <select name="Opening_City" class="form-control" id=""></select>
        </div>
        <div class="form-group">
          <label for="">Deposit Opening Branch</label>
          <select name="Opening_Branch" class="form-control" id=""></select>
        </div>
        <div class="form-group  ">
          <label for=""><span>*</span>Amount</label>
          <input type="text" class="form-control" id="amount">
        </div>
        <div class="form-group ">
          <label for=""><span>*</span>Interest Payout</label>
          <select name="Interest_Type" class="form-control" id="">
            <option value="monthly">Monthly</option>
            <option value="Quaterly">Quaterly</option>
            <option value="Half Yearly">Half Yearly</option>
            <option value="Yearly">Yearly</option>
          </select>
        </div>
        <div class="form-group d-flex justify-space-around ">
          <label for=""><span>*</span>Deposit Period</label>
          <select class="form-control mx-1"><label for="" value="years"></label>
            <option value="2001">2026</option>
          </select>
          <select class="form-control mx-1"><label for="" value="months"></label>
            <option value="03">09</option>
          </select>
          <button type="submit" class="btn-sm ">Check Rate of Interest</button>
        </div>
        <div class="form-group  ">
          <label for=""><span>*</span>PAN No</label>
          <input type="text" class="form-control" id="panNo">
        </div>
        <div class="Nextpage   col-4">
          <button type="submit" class="form-control btn-block">Proceed<span>>></span></button>
        </div>
      </form> -->

    <div class="step-one">
      <div class="card">
        <div class="card-header bg-primary text-white">STEP 1/4 - Personal Details</div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Full name</label>
                <input type="text" class="form-control" placeholder="Enter full name" wire:model="c_name">
                <span class="text-danger">@error('c_name'){{ $message }}@enderror</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Account Number</label>
                <input type="text" class="form-control" placeholder="Enter account number" wire:model="account_no">
                <span class="text-danger">@error('account_no'){{ $message }}@enderror</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Customer Id</label>
                <input class="form-control" type="text" placeholder="Enter customer id" wire:model="c_id">
                <span class="text-danger">@error('c_id'){{ $message }}@enderror</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Branch Name</label>
                <input type="text" class="form-control" placeholder="Enter branch name" wire:model="branch_name">
                <span class="text-danger">@error('branch_name'){{ $message }}@enderror</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Deposit Opening City</label>
                <input type="text" class="form-control" placeholder="Enter City name" wire:model="branch_city">
                <span class="text-denger">@error('branch_city'){{ $message }}@enderror</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Amount</label>
                <input type="text" class="form-control" placeholder="Enter amount" wire:model="amount">
                <span class="text-denger">@error('amount'){{ $message }}@enderror</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for=""><span>*</span>Interest Payout</label>
                <select name="Interest_Type" class="form-control" wire:model="interest_type" id="">
                  <option value="monthly">Monthly</option>
                  <option value="Quaterly">Quaterly</option>
                  <option value="Half Yearly">Half Yearly</option>
                  <option value="Yearly">Yearly</option>
                </select>
                <span class="text-denger">@error('interest_type'){{ $message }}@enderror</span>
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
                <span class="text-danger">@error('year'){{ $message }}@enderror</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

  <div class="step-two">
    <div class="card ">
      <div class="card-header bg-primary text-white">STEP 2/4 - Contacts & Nominee</div>
      <div class="card-body text-align-center flex-wrap justify-content-center">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group ">
              <label for="">Email Address</label>
              <input type="text" class="form-control" placeholder="Enter email address" wire:model="email">
              <span class="text-danger">@error('email'){{ $message }}@enderror</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Phone</label>
              <input type="text" class="form-control" placeholder="Enter phone number" wire:model="phone">
              <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Name of Nominee</label>
              <input type="text" class="form-control" placeholder="Enter nominee name" wire:model="nominee">
              <span class="text-danger">@error('nominee'){{ $message }}@enderror</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Relationship with Depositer</label>
              <input class="form-control" placeholder="Relation with Nominee" type="text" wire:model="nominee_relation">
              <span class="text-danger">@error('nominee_relation'){{ $message }}@enderror</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Nominee Aadhar Number</label>
              <input type="text" class="form-control" placeholder="Enter nominee name" wire:model="nominee_aadharNo">
              <span class="text-danger">@error('nominee_aadharNo'){{ $message }}@enderror</span>
            </div>
          </div>
          <div class="form-group">
            <label for="pan">Pan</label>
            <input type="file" class="form-control" wire:model="pan">
            <span class="text-danger">@error('pan'){{ $message }}@enderror</span>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- <form action="" id="form2">
        <h2>2. Nominee Details</h2>
        <div class="form-group ">
          <label for="#">Name of Nominee<span>*</span> </label>
          <input type="text" name="" id="" class="form-control" required>
        </div>
    
        <div class="form-group">
          <br><label for="#">Nominee Email ID  </label>
          <input type="email"class="form-control" name="" id="">
        </div>
        <div class="address text-align-center">
          <div class="form-group">
            <label for="">City </label>
            <input type="text" class="form-control" name="" id="">
            <label for="">Pin Code</label> 
            <input type="number" class="form-control" name="" id="">
          </div>
          <div class="form-group">
            <label for="">State</label>
            <select name="" class="form-control" id="">
              <option value=""></option>
            </select>
            <label for="">Country</label>
            <input type="text" value="" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="">Date of Birth of Nominee</label>
          <input class="form-control" type="number">
        </div>
        <div class="form-group">
          <label for="">Relationship with Depositer</label>
          <select class="form-control" name="" id="">
            <option value=""></option>
          </select>
        </div>
        <div class="form-group">
          <label for=""> Name of Guardian</label>
          <input type="text" class="form-control">
          <p>Applicable if nominee is a minor</p>
        </div>
        <div class="btn-box  mx-6 d-flex justify-space-between">
          <button type="button" class="form-control  mx-2" id="back1"><span>skip</span></button>
          <button type="button" class="form-control mx-2" id="next2">Procedd<span>>></span></button>
        </div>
      </form> -->
<div class="step-three">
  <div class="card">
    <div class="card-header bg-primary text-white">STEP 4/4 - Confirmation</div>
      <div class="card-body py-3 d-flex  mx-auto flex-wrap">
        <div class="row ">
          <div class="col-lg-3 col-sm-8">
            <h1>Debit Account</h1>
            <p>916779854xxxx</p>
          </div>
          <div class="col-lg-3 col-sm-8">
            <h1>Deposite Amount</h1>
            <p>₹ 5000</p>
          </div>
          <div class="col-lg-3 col-sm-8 ">
            <h1>Deposit OPening City</h1>
            <p>KOlkata</p>
          </div>
        </div>
        <div class="row ">
          <div class="col-lg-3 col-sm-8">
            <h1>Deposit Opening Branch</h1>
            <p>Hooghly</p>
          </div>
          <div class="col-lg-3 col-sm-8 ">
            <h1>Deposite Nature</h1>
            <p>Interest Payable Monthly</p>
          </div>
          <div class="col-lg-3 col-sm-8 ">
            <h1>Maturity Instruction</h1>
            <p>Close the FD on maturity & Credit my SB Account</p>
          </div>
        </div>
        <div class="row  ">
          <div class="col-lg-3 col-sm-8">
            <h1>Debit Period</h1>
            <p>365 Days</p>
          </div>
          <div class="col-lg-3 col-sm-8">
            <h1>Rate of Interest</h1>
            <p>5.900%</p>
          </div>
          <div class="col-lg-3 col-sm-8 ">
            <h1>Maturity Amount</h1>
            <p>₹ 100000.00</p>
          </div>
        </div>
        <div class="form-group ">
          <div class="row  ">
            <p>Nominee Name</p>
          </div>
          <label for="terms" class="d-block">
            <input type="checkbox" id="terms" wire:model="terms"> I have read Disclaimer & Accept all the Terms and Conditions
          </label>
          <span class="text-danger">@error('terms'){{ $message }}@enderror</span>
        </div>
      </div>
  </div>
</div>
</div>
</div>
@endsection