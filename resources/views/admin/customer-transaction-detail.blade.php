@extends('admin.home')
@section('title','Cust Trans Detail')
@section('page-name')
<main>
    <div class="staff-heading">
        <h1 class="bankname text-center font-weight-bold">Suraksha Bank</h1>
        <!-- <h1 class="branchname text-center font-weight-light">Branch Name : Kolkata</h1> -->
        <h1 class="title text-center">Customer Details</h1>
        <div class="searchbox">
            <form>
                <input type="text" class="form-control" placeholder="Customer a/c no">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
            <form>
                <input type="text" class="form-control" placeholder="Customer Id">
                <button type="submit" class="btn btn-success">Search</button>
            </form>
            <form>
                <input type="text" class="form-control" placeholder="Customer Aadhar No">
                <button type="submit" class="btn btn-info">Search</button>
            </form>
        </div>
    </div>
    <div class="profile-body">
      <h1 class="text-center customer-name">Ronit Singh</h1>
      <h2 class="text-center customer-balance">Account No : 12345678901234</h2>
      <h2 class="text-center customer-balance">Available Balance : 1,52,000 INR</h2>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Transaction ID</th>
              <th scope="col">Credit</th>
              <th scope="col">Debit</th>
              <th scope="col">Balance</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>01-05-2019</th>
              <td>ACRAF23DB3C4</td>
              <td>30000</td>
              <td></td>
              <td>30000</td>
            </tr>
            <tr>
              <th>30-05-2019</th>
              <td>VADE0B248932</td>
              <td></td>
              <td>30000</td>
              <td>10000</td>
            </tr>
            <tr>
              <th>04-06-2019</th>
              <td>ACRAF23DB3C4</td>
              <td>10000</td>
              <td></td>
              <td>20000</td>
            </tr>
            <tr>
              <th>01-12-2019</th>
              <td>ACRAF23DB3C4</td>
              <td>30000</td>
              <td></td>
              <td>50000</td>
            </tr>
            <tr>
              <th>30-12-2019</th>
              <td>VADE0B248932</td>
              <td></td>
              <td>24500</td>
              <td>25500</td>
            </tr>
            <tr>
              <th>01-06-2020</th>
              <td>ACRAF23DB3C4</td>
              <td>30000</td>
              <td></td>
              <td>55500</td>
            </tr>
            <tr>
              <th>30-06-2020</th>
              <td>VADE0B248932</td>
              <td></td>
              <td>24500</td>
              <td>21000</td>
            </tr>
            <tr>
              <th>01-12-2020</th>
              <td>ACRAF23DB3C4</td>
              <td>30000</td>
              <td></td>
              <td>51000</td>
            </tr>
            <tr>
              <th>30-12-2020</th>
              <td>VADE0B248932</td>
              <td></td>
              <td>24500</td>
              <td>26500</td>
            </tr>
            <tr>
              <th>01-06-2021</th>
              <td>ACRAF23DB3C4</td>
              <td>30000</td>
              <td></td>
              <td>56500</td>
            </tr>
            <tr>
              <th>30-06-2021</th>
              <td>VADE0B248932</td>
              <td></td>
              <td>24500</td>
              <td>22000</td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
</main>
@endsection