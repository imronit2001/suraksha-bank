@extends('admin.home')
@section('title','Dashboard')
@section('page-name')
    <div class="main">
      <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>0000</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/customer.png')}} alt="customer.png">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Total Customers</h1>
        </div>
      </div>
      <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>{{ $staff }}</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/staff.png')}} alt="staff.png">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Total Staffs</h1>
        </div>
      </div>
      <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>0000</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/inactive-customer.png')}} alt="inactve-customer.png">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Inactive Customers</h1>
        </div>
      </div>
      <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>0000</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/today-transaction.png')}} alt="toay-transaction.png">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Today's Transaction</h1>
        </div>
      </div>
      <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>{{ $fd }}</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/fixed-deposit.png')}} alt="fixed-deposit.png">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Fixed Deposits</h1>
        </div>
      </div>
      <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>{{ $changeBranchList }}</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/branch-change.png')}} alt="branch-change.png">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Branch Change Requests</h1>
        </div>
      </div>
      <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>1000</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/saving-account.png')}} alt="saving-account.png">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Total Saving a/c</h1>
        </div>
      </div>
      <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>1000</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/current-account.png')}} alt="customer.png">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Total Current a/c</h1>
        </div>
      </div>
      <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>1000</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/credit-card.png')}} alt="credit-cardpng">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Total Credit Card a/c</h1>
        </div>
      </div>
      {{-- <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>1000</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/home-loan.png')}} alt="home-loan.png">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Home Loans</h1>
        </div>
      </div>
      <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>1000</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/study-loan.png')}} alt="study-loan.png">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Study Loans</h1>
        </div>
      </div>
      <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>1000</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/personal-loan.png')}} alt="personal-loanpng">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Personal Loans</h1>
        </div>
      </div>
      <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>1000</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/car-loan.png')}} alt="car-loanpng">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Car Loans</h1>
        </div>
      </div> --}}
      <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>{{ $branch }}</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/branch-change.png')}} alt="branch-change">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Total Branches</h1>
        </div>
      </div>
      <div class="content">
        <div class="content-box">
          <div class="content-left">
            <h1>{{ $helpline }}</h1>
          </div>
          <div class="content-right">
            <img src={{asset('images/helpline.png')}} alt="helpline">
          </div>
        </div>
        <div class="content-bottom">
          <h1>Helpline</h1>
        </div>
      </div>


    </div>
@endsection
