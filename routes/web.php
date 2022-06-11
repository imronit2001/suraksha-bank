<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\termsController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\AccountOpeningFormController;
use App\Http\Controllers\KYCFormController;
use App\Http\Controllers\Helplinecontroller;
use App\Http\Controllers\AdminHelplinecontroller;
use App\Http\Controllers\ChangeBranchController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\FundTransferController;

/*================================
    LANDING PAGE ROUTES STARTS
================================*/

Route::prefix('/')->group(function () {
    Route::get('',[indexController::class, 'index']);
    Route::get('about',[indexController::class, 'about']);
    Route::get('offer',[indexController::class, 'offer']);
    Route::get('services',[indexController::class, 'services']);
    Route::get('CustomerCare',[indexController::class, 'customerCare']);
    Route::get('apply',[indexController::class, 'accountOpening'])->name('apply');
    Route::post('apply',[AccountOpeningFormController::class, 'create']);
    Route::post('CustomerCare', [CustomerCareController::class, 'createIssues'])->name('createIssues');
    Route::get('termsCondition',[termsController::class, 'index']);
    // Route::get('login', [indexController::class, 'login']);
});

/*================================
    ADMIN ROUTES STARTS
================================*/
Route::prefix('/admin')->group(function () {
    // dashboard
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin-dashboard');
    // bank balance
    Route::get('/bank-balance', [AdminController::class, 'bankBalance'])->name('admin-bank-balance');
    // add staff
    Route::get('/add-staff', [AdminController::class, 'addStaffIndex'])->name('admin-add-staff');
    Route::post('/add-staff', [AdminController::class, 'addStaffCreate'])->name('admin-add-staff');
    // manager staff
    Route::get('/manage-staff', [AdminController::class, 'manageStaff'])->name('admin-manage-staff');
    // remove staff
    Route::get('/remove-staff/{id}/{status}', [AdminController::class, 'removeStaff'])->name('admin-remove-staff');
    // add manager
    Route::get('/add-manager', [AdminController::class, 'addManagerIndex'])->name('admin-add-manager');
    Route::post('/add-manager', [AdminController::class, 'addManagerCreate'])->name('admin-add-manager');
    // view managers
    Route::get('/managers', [AdminController::class, 'managers'])->name('admin-managers');

    Route::get('/remove-manager/{id}/{status}', [AdminController::class, 'removeManager'])->name('admin-remove-manager');

    // manager customers
    Route::get('/manage-customer', [AdminController::class, 'manageCustomer'])->name('admin-manage-customer');
    // customer transaction details
    Route::get('/customer-transaction-detail', [AdminController::class, 'customerTransactionDetail'])->name('admin-customer-transaction-detail');  // branch change applications
    Route::get('/branch-change', [AdminController::class, 'branchChange'])->name('admin-branch-change');
    // approve branch change
    Route::get('/branch-change-approve/{id}', [AdminController::class, 'branchChangeApprove'])->name('admin-branch-change-approve');
    // decline branch change
    Route::get('/branch-change-decline/{id}', [AdminController::class, 'branchChangeDecline'])->name('admin-branch-change-decline');
    // fixed deposit
    Route::get('/fixed-deposit', [AdminController::class, 'fixedDeposit'])->name('admin-fixed-deposit');
    // term and condition
    Route::get('/termsCondition', [AdminController::class, 'termsCondition'])->name('admin-termsCondition');
    // branches
    Route::get('/branch-table', [BranchController::class, 'store'])->name('admin-branch-table');
    Route::get('/add-branch', [BranchController::class, 'index'])->name('admin-add-branch');
    Route::post('/add-branch', [BranchController::class, 'create'])->name('admin-add-branch');
    Route::get('/remove-branch/{id}', [BranchController::class, 'destroy'])->name('admin-remove-branch');
    //helpine
    Route::get('/helpline', [AdminHelplinecontroller::class, 'issue'])->name('admin-helpline');
    Route::get('/helpline-view/{id}', [AdminHelplinecontroller::class, 'issues'])->name('admin-helpline-view');

});

/*================================
    STAFF ROUTES STARTS HERE
================================*/
Route::prefix('/staff')->group(function () {
    Route::get('/', [StaffController::class, 'dashboard'])->name('staff-dashboard');
    Route::get('/credit-money', [StaffController::class, 'creditMoneyIndex'])->name('staff-credit-money');
    Route::post('/credit-money', [StaffController::class, 'creditMoneyCreate'])->name('staff-credit-money');
    Route::get('/debit-money', [StaffController::class, 'debitMoneyIndex'])->name('staff-debit-money');
    Route::post('/debit-money', [StaffController::class, 'debitMoneyCreate'])->name('staff-debit-money');
    Route::get('/transaction', [StaffController::class, 'transaction'])->name('staff-transaction');
    Route::get('/cheque-book-request',[StaffController::class,'ShowChequeBookList'])->name('staff-cheque-book-request');
});

/*================================
    CUSTOMER ROUTES STARTS HERE
================================*/
Route::prefix('/customer')->group(function () {
    Route::get('/', [CustomerController::class, 'dashboard'])->name('customer-dashboard');
    Route::get('/transaction-password', [CustomerController::class, 'TransactionPassword'])->name('customer-transaction-password');
    Route::get('/account-details', [CustomerController::class, 'AccountDetails'])->name('customer-account-details');
    Route::get('/transaction-details', [CustomerController::class, 'TransactionDetails'])->name('customer-transaction-details');
    Route::get('/fund-transfer', [FundTransferController::class, 'index'])->name('customer-fund-transfer');
    Route::post('/fund-transfer', [FundTransferController::class, 'create'])->name('customer-fund-transfer');
    Route::get('/branch-change', [CustomerController::class, 'BranchChange'])->name('customer-branch-change');
    Route::get('/fixed-deposite', [CustomerController::class, 'FixedDeposite'])->name('customer-fixed-deposite');
    // Route::get('/issue', [AdminHelplinecontroller::class, 'issue'])->name('issue');
    Route::get('/cheque-book',[CustomerController::class,'ChequeBook'])->name('customer-cheque-book');
    Route::get('/branch-change',[ChangeBranchController::class,'index'])->name('customer-branch-change');
    Route::post('/branch-change',[ChangeBranchController::class,'create'])->name('customer-branch-change');
    Route::get('/branch-change-reset/{id}',[ChangeBranchController::class,'reset'])->name('customer-branch-change-reset');
    Route::get('/KYCForm',[KYCFormController::class, 'index']);
    Route::post('/KYCForm',[KYCFormController::class, 'create']);

});








/*================================
    UNKNOWN ROUTES
================================*/

