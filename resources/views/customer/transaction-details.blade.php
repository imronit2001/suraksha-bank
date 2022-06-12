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
                <div class="col-md-6" id="income">
                    <div class="d-flex justify-content-start align-items-center">
                        <p class="fa fa-long-arrow-down"></p>
                        <p class="text mx-3">Income</p>
                        <p class="text-black ml-4 money">$9,758.23</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-md-end align-items-center">
                        <div class="fa fa-long-arrow-up"></div>
                        <div class="text mx-3">Expense</div>
                        <div class="text-black ml-4 money">$961.23</div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <ul class="nav nav-tabs w-75">
                    <li class="nav-item"> <a class="nav-link active" href="#history">History</a> </li>
                    <!-- <li class="nav-item"> <a class="nav-link" href="#">Reports</a> </li> -->
                </ul> <a href="" data-bs-toggle="modal" data-bs-target="#FundTransferModal" class="btn btn-primary">New Transaction</a>
            </div>
            <div id="example" class="table table-striped  mt-3" style="width:100%">
                <table class="table table-white table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Descriptipn</th>
                            <th scope="col">Mode</th>
                            <th scope="col">Ref.Id</th>
                            <th scope="col">Withdrawals</th>
                            <th scope="col">Deposits</th>
                            <th scope="col" class="text-right">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row" class="text-muted">12 Jul 2020, 12:30 PM</td> 
                            <td> <span class="fa fa-briefcase mr-1"></span> Coorg Trip </td>
                            <td><span class="fa fa-cc-mastercard"></span></td>
                            <td>1234</td>
                            <td>1234</td>
                            <td>1234</td>
                            <td class="d-flex justify-content-end align-items-center"> <span class="fa fa-long-arrow-up mr-1"></span> $52.9 </td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-muted">11 Jul 2020, 2:00 PM</td>
                            <td><span class="fa fa-bed mr-1"></span> Hotel Leela Palace </td>
                            <td><span class="fa fa-cc-mastercard"></span></td>
                            <td>1234</td>
                            <td>1234</td>
                            <td>1234</td>
                            <td class="d-flex justify-content-end align-items-center"> <span class="fa fa-long-arrow-up mr-1"></span> $18.9 </td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-muted">10 Jul 2020, 8:30 PM</td>
                            <td> <span class="fa fa-exchange mr-1"></span> Monthly Salary </td>
                            <td><span class="fa fa-cc-visa"></span></td>
                            <td>1234</td>
                            <td>1234</td>
                            <td>1234</td>
                            <td class="d-flex justify-content-end align-items-center"> <span class="fa fa-long-arrow-down mr-1"></span> $9,765.00 </td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-muted">12 May 2020, 4:30 PM</td>
                            <td><span class="fa fa-exchange mr-1"></span> Xbox Purchase </td>
                            <td><span class="fa fa-money" aria-hidden="true"></span></td>
                            <td>1234</td>
                            <td>1234</td>
                            <td>1234</td>
                            <td class="d-flex justify-content-end align-items-center"> <span class="fa fa-long-arrow-up mr-1"></span> $198.90 </td>
                        </tr>
                        <tr>
                            <td scope="row"class="text-muted">11 May 2020, 5:30 PM</td>
                            <td> <span class="fa fa-cutlery mr-1"></span> Dinner Party </td>
                            <td><span class="fa fa-cc-visa"></span></td>
                            <td>1234</td>
                            <td>1234</td>
                            <td>1234</td>
                            <td class="d-flex justify-content-end align-items-center"> <span class="fa fa-long-arrow-up mr-1"></span> $12.90 </td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-muted">10 May 2020, 01:30 PM</td>                         
                            <td> <span class="fa fa-briefcase mr-1"></span> Nandini Hills Ride </td>
                            <td><span class="fa fa-cc-mastercard"></span></td>
                            <td>1234</td>
                            <td>1234</td>
                            <td>1234</td>
                            <td class="d-flex justify-content-end align-items-center"> <span class="fa fa-long-arrow-up mr-1"></span> $97.9 </td>
                        </tr>
                        <tr>
                            <td scope="row"class="text-muted">09 May 2020, 01:30 PM</td>                          
                            <td> <span class="fa fa-briefcase mr-1"></span> Goa Beach Party </td>
                            <td><span class="fa fa-cc-visa"></span></td>
                            <td>1234</td>
                            <td>1234</td>
                            <td>1234</td>
                            <td class="d-flex justify-content-end align-items-center"> <span class="fa fa-long-arrow-up mr-1"></span> $97.9 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between align-items-center results"> <span class="pl-md-3">Showing<b class="text-primary"> 1-7 0f 200 </b> trasactions</span>
                <div class="pt-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item disabled"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">&lt;</span> </a> </li>
                            <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">&gt;</span> </a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>    
    </div>
@endsection