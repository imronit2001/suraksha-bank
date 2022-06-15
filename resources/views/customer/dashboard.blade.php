@extends('customer.homesidenav')
@section('title','Customer Dashboard')
@section('page-name')
<div class="content-wrapper">
    <div class="container-header p-2 mx-3">
        <h4>Account Summary</h4>
    </div>
    <div class="container-fluid flex-row bg-light p-3 border-box mx-1">
        <div class="row mb-2 d-flex justify-space-between ">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box d-flex flex-row">
                    <span class="info-box-icon bg-info elevation-1"><img src="" alt=""></span>
                    <div class="info-box-content d-flex flex-column">
                        <span class="info-box-text mb-2">Account Holder Name</span>
                        <span class="info-box-number">
                            {{$customer->FullName}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <div class="info-box-content d-flex flex-column">
                        <span class="info-box-text mb-2">Account Number</span>
                        <span class="info-box-number">
                            {{$customer->account_no}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <div class="info-box-content d-flex flex-column">
                        <span class="info-box-text mb-2">Branch</span>
                        <span class="info-box-number">
                        {{$customer->BranchName}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <div class="info-box-content d-flex flex-column">
                        <span class="info-box-text mb-2">Account Balance</span>
                        <span class="info-box-number">
                            {{$customer->balance}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card transaction_card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Transaction</h3>
                        <span class="card-tool float-right"><a href="#"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></span>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Reference Id</th>
                                    <th>Date</th>
                                    <th>time</th>
                                    <th>Closing Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $trans as $tran)
                                <tr>
                                    <td>
                                        <img src="" alt=" 1" class="img-circle  float-left img-size-32 mr-2">
                                        {{$tran->referenceId}}
                                    </td>
                                    <td>{{tran->date}}</td>
                                    <td><span class="badge bg-primary">{{tran->time}}</span></td>
                                    <td>
                                       {{tran->balance}}
                                    </td>
                                 </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card fund_transfer_card my-3">
                    <div class="card-header">
                        <h3 class="card-title">Fund Transfer</h3>
                    </div>
                    <div class="cardbody table-responsive">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Beneficiary Name</th>
                                    <th>Beneficiary Account No </th>
                                    <th>Transaction Id</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fund as $fun )


                                <tr>

                                    <td>
                                        <img src="" alt=" 1" class="img-circle  float-left img-size-32 mr-2">
                                        {{$fun->beneficiary_name}}
                                    </td>
                                    <td>{{$fun->benficiary_accountno}}</td>
                                    <td>{{$fun->referenceId}}</td>
                                    <td><span class="badge p-2 bg-primary">{{$fun->amount}}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card credit_card">
                    <div class="card-header  ">
                        <h3 class="card-title">Credit card</h3>
                        <span class="float-right"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                                <th>Card No</th>
                                <th>Card Type</th>
                                <th>Last Statement Due</th>
                            </thead>
                            <tbody>
                                <td>879900865</td>
                                <td>Premium Platinum</td>
                                <td>18,000</td>
                            </tbody>
                        </table>
                        <div class="text-center mt-5 mb-3">
                            <a href="#" class="btn btn-sm border-primary">More Details</a>
                            <a href="#" class="btn btn-sm btn-primary">Pay now </a>
                        </div>
                    </div>
                </div>
                <!-- /.card -->

                <div class="card loan_card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Loans</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body justify-space-between p-0">
                        <div class="col-12">
                            <div class="info my-1 bg-info ">
                                <div class="small-box  text-center">
                                    <div class="inner p-1">
                                        <span class="info-box-icon bg-warning"><i class='bx bx-building-house'></i></span>
                                        <p>Home Loans</p>
                                    </div>
                                    <a href="#" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="info my-1 card m-auto bg-info ">

                                <div class="small-box  text-center">
                                    <div class="inner p-1">
                                        <span class="info-box-icon bg-warning"><i class='bx bxs-book-reader'></i></span>
                                        <p>Study Loans</p>
                                    </div>
                                    <a href="#" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="info card my-1 bg-info ">
                                <div class="small-box  text-center">
                                    <div class="inner p-1">
                                        <span class="info-box-icon bg-warning"><i class='bx bx-car'></i></span>
                                        <p>Car Loans</p>
                                    </div>
                                    <a href="#" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="info  my-1 bg-info ">
                                <div class="small-box  text-center">
                                    <div class="inner p-1">
                                        <span class="info-box-icon bg-warning"><i class='bx bx-user-circle'></i></span>
                                        <p>Personal loans</p>
                                    </div>
                                    <a href="#" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
</div>
</div>
@endsection
