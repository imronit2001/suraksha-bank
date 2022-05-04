@extends('admin.home')
@section('title','Bank Balance')
@section('page-name')
<div class="main-div">
    <div class="main-heading">
        <div class="main-heading-top">
            <div class="main-heading-top-left">
                <h1>Branch Name : Kolkata</h1>
            </div>
            <div class="main-heading-top-right">
                <h1>25/03/2022 , 12:40</h1>
            </div>
        </div>
        <div class="main-heading-bottom">
            <h1>Available Fund : 5,67,45,000.00</h1>
        </div>
    </div>
    
    <div class="main-passbook ">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Total Transaction</th>
                    <th scope="col">Total Credit</th>
                    <th scope="col">Total Debit</th>
                    <th scope="col">Balance</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10/04/2022</td>
                    <td>50000</td>
                    <td>20000</td>
                    <td>30000</td>
                    <td>100000</td>
                </tr>
                <tr>
                    <td>10/04/2022</td>
                    <td>50000</td>
                    <td>20000</td>
                    <td>30000</td>
                    <td>100000</td>
                </tr>
                <tr>
                    <td>10/04/2022</td>
                    <td>50000</td>
                    <td>20000</td>
                    <td>30000</td>
                    <td>100000</td>
                </tr>
                <tr>
                    <td>10/04/2022</td>
                    <td>50000</td>
                    <td>20000</td>
                    <td>30000</td>
                    <td>100000</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection