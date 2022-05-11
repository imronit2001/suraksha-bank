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
            <td>123456xxx</td>
            <td>Saving Account/Current Account</td>
            <td>Hooghly</td>
          </tr>
        </tbody>
      </table>
      <div class="step-row">
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
      </form>

      <form action="" id="form2">
        <h2>2. Nominee Details</h2>
        <div class="form-group ">
          <label for="#">Name of Nominee<span>*</span> </label>
          <input type="text" name="" id="" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="#">Nominee Address 1  </label>
          <input type="text"class="form-control"  name="" id=""><br>
        </div>
        <div class="form-group">
          <label for="#">Nominee Address 2<span>*</span>  </label>
          <input type="text"class="form-control" name="" id="" required>
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
      </form>
      <form action="" id="form3">
        <h2>Confirm Details</h2>
        <div class="card py-3 d-flex justify-content-center mx-auto flex-wrap">
          <div class="row d-flex">
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
            <div class="row mx-2 ">
              <p>Nominee Name</p>
              <p>Nominee Address1</p>
              <p>Nominee address2</p>
            </div> 
            <div class="form-group">
              <input type="checkbox"><label for=""> I have read Disclaimer & Accept all the Terms and Conditions</label>
            </div> 
            <button class="btn-sm mx-5">Confirm</button>
          </div>
       </div>
      </form>
    </div>
</div>
@endsection