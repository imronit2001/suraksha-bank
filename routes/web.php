<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

// Admin Routes

Route::get('/admin',[AdminController::class,'dashboard'])->name('admin-dashboard');
Route::get('/admin/bank-balance',[AdminController::class,'bankBalance'])->name('admin-bank-balance');
Route::get('/admin/add-staff',[AdminController::class,'addStaff'])->name('admin-add-staff');
Route::get('/admin/manage-staff',[AdminController::class,'manageStaff'])->name('admin-manage-staff');
Route::get('/admin/staff-details',[AdminController::class,'staffDetails'])->name('admin-staff-details');
Route::get('/admin/add-manager',[AdminController::class,'addManager'])->name('admin-add-manager');
Route::get('/admin/manage-customer',[AdminController::class,'manageCustomer'])->name('admin-manage-customer');
Route::get('/admin/customer-transaction-detail',[AdminController::class,'customerTransactionDetail'])->name('admin-customer-transaction-detail');
Route::get('/admin/branch-change',[AdminController::class,'branchChange'])->name('admin-branch-change');
Route::get('/admin/fixed-deposit',[AdminController::class,'fixedDeposit'])->name('admin-fixed-deposit');
Route::get('/admin/terms-condition',[AdminController::class,'termsCondition'])->name('admin-terms-condition');

Route::get('/customer/transaction-password',[CustomerController::class,'TransactionPassword'])->name('customer-transaction-password');
Route::get('customer/account-details',[CustomerController::class,'AccountDetails'])->name('customer-account-details');
Route::get('/customer/transaction-details',[CustomerController::class,'TransactionDetails'])->name('customer-transaction-details');
Route::get('/customer/fund-transfer',[CustomerController::class,'FundTransfer'])->name('customer-fund-transfer');
Route::get('/customer/branch-change',[CustomerController::class,'BranchChange'])->name('customer-branch-change');
Route::get('/customer/fixed-deposite',[CustomerController::class,'FixedDeposite'])->name('customer-fixed-deposite');
Route::get('/customer/cheque-book',[CustomerController::class,'ChequeBook'])->name('customer-cheque-book');






Route::get('/',function(){
    return view('welcome');
});

