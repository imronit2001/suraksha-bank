@extends('customer.homesidenav')
@section('title','Transaction Details')
@section('page-name')
<div class="container transection justify-content-center align-item-center">
        <div class="wrapper rounded">
            <nav class="navbarTD navbar-expand-lg navbar-light light d-lg-flex align-items-lg-start"> <a class="navbar-brand" href="#">Transactions <p class="text-muted pl-1">Welcome to your transactions</p> </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item"> <a class="nav-link" href="#"><span class="fa fa-bell-o font-weight-bold"></span> <span class="notify">Notifications</span> </a> </li>
                        <li class="nav-item "> <a href="#"><span class="fa fa-search"></span></a> <input type="search" class="" placeholder="Search"> </li>
                    </ul>
                </div>
            </nav>
            <div class="row mt-2 pt-2">
                {{-- <div class="col-md-6" id="income">
                    <div class="d-flex justify-content-start align-items-center">
                      <div class="row">Today's Transaction
                        <div class="col-3"></div>
                      </div>
                    </div>
                </div> --}}
                {{-- <div class="col-md-6">
                    <div class="d-flex justify-content-md-end align-items-center">
                        <div class="fa fa-long-arrow-up"></div>
                        <div class="text mx-3">Expense</div>
                        <div class="text-black ml-4 money">$961.23</div>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="d-flex justify-content-between align-items-center mt-3">
                <ul class="nav nav-tabs w-75">
                    <li class="nav-item"> <a class="nav-link active" href="#history">History</a> </li>
                    <!-- <li class="nav-item"> <a class="nav-link" href="#">Reports</a> </li> -->
                </ul> <a href="" data-bs-toggle="modal" data-bs-target="#FundTransferModal" class="btn btn-primary">New Transaction</a>
            </div> --}}
            <div id="example" class="table table-striped  mt-3" style="width:100%">
                <table class="table table-white table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Reference Id</th>
                            <th scope="col">Credit</th>
                            <th scope="col">Debit</th>
                            <th scope="col">Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trans as $tran )

                        <tr>
                            <td scope="row" class="text-muted">{{$tran->date}}</td>
                            <td> <span class="fa fa-briefcase mr-1"></span>{{$tran->time}} </td>
                            <td><span class="fa fa-cc-mastercard">{{$tran->referenceId}}</span></td>
                            <td>{{$tran->credit}}</td>
                            <td>{{$tran->debit}}</td>
                            <td>{{$tran->balance}}</td>
                            <td class="d-flex justify-content-end align-items-center"> <span class="fa fa-long-arrow-up mr-1"></span> $52.9 </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <div class="d-flex justify-content-between align-items-center results"> <span class="pl-md-3">Showing<b class="text-primary"> 1-7 0f 200 </b> trasactions</span>
                <div class="pt-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item disabled"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">&lt;</span> </a> </li>
                            <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">&gt;</span> </a> </li>
                        </ul>
                    </nav>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
