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
use App\Http\Controllers\FixedDepositeController;
use App\Http\Controllers\ChequeBookController;
use App\Http\Controllers\FundTransferController;
use Illuminate\Support\Facades\Auth;

/*================================
    LANDING PAGE ROUTES STARTS
================================*/

Route::prefix('/')->group(function () {
    Route::get('', [indexController::class, 'index']);
    Route::get('about', [indexController::class, 'about']);
    Route::get('offer', [indexController::class, 'offer']);
    Route::get('services', [indexController::class, 'services']);
    Route::get('CustomerCare', [indexController::class, 'customerCare']);
    Route::get('apply', [indexController::class, 'accountOpening'])->name('apply');
    Route::post('apply', [AccountOpeningFormController::class, 'create']);
    Route::post('CustomerCare', [CustomerCareController::class, 'createIssues'])->name('createIssues');
    Route::get('termsCondition', [termsController::class, 'index']);
});

Auth::routes();

/* ==================================
    ADMIN ROUTES STARTS
 ==================================*/

Route::prefix('admin')->name('admin-')->group(function () {
    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'admin.login')->name('login');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        Route::post('/check', [AdminController::class, 'check'])->name('check');
    });
    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        // logout
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        // dashboard
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
        // bank balance
        Route::get('/bank-balance', [AdminController::class, 'bankBalance'])->name('bank-balance');
        // add staff
        Route::get('/add-staff', [AdminController::class, 'addStaffIndex'])->name('add-staff');
        Route::post('/add-staff', [AdminController::class, 'addStaffCreate'])->name('add-staff');
        // manager staff
        Route::get('/manage-staff', [AdminController::class, 'manageStaff'])->name('manage-staff');
        // remove staff
        Route::get('/remove-staff/{id}/{status}', [AdminController::class, 'removeStaff'])->name('remove-staff');
        // add manager
        Route::get('/add-manager', [AdminController::class, 'addManagerIndex'])->name('add-manager');
        Route::post('/add-manager', [AdminController::class, 'addManagerCreate'])->name('add-manager');
        // view managers
        Route::get('/managers', [AdminController::class, 'managers'])->name('managers');

        Route::get('/remove-manager/{id}/{status}', [AdminController::class, 'removeManager'])->name('remove-manager');

        // manager customers
        Route::get('/manage-customer', [AdminController::class, 'manageCustomer'])->name('manage-customer');
        // customer transaction details
        Route::get('/customer-transaction-detail', [AdminController::class, 'customerTransactionDetail'])->name('customer-transaction-detail');  // branch change applications
        Route::get('/branch-change', [AdminController::class, 'branchChange'])->name('branch-change');
        // approve branch change
        Route::get('/branch-change-approve/{id}', [AdminController::class, 'branchChangeApprove'])->name('branch-change-approve');
        // decline branch change
        Route::get('/branch-change-decline/{id}', [AdminController::class, 'branchChangeDecline'])->name('branch-change-decline');
        // fixed deposit
        Route::get('/fixed-deposit', [AdminController::class, 'fixedDeposit'])->name('fixed-deposit');
        // term and condition
        Route::get('/termsCondition', [AdminController::class, 'termsCondition'])->name('termsCondition');
        // branches
        Route::get('/branch-table', [BranchController::class, 'store'])->name('branch-table');
        Route::get('/add-branch', [BranchController::class, 'index'])->name('add-branch');
        Route::post('/add-branch', [BranchController::class, 'create'])->name('add-branch');
        Route::get('/remove-branch/{id}', [BranchController::class, 'destroy'])->name('remove-branch');
        //helpine
        Route::get('/helpline', [AdminHelplinecontroller::class, 'issue'])->name('helpline');
        Route::get('/helpline-view/{id}', [AdminHelplinecontroller::class, 'issues'])->name('helpline-view');
        Route::post('/helplineReply', [AdminHelplinecontroller::class, 'helplineReply'])->name('helplineReply');
        // Route::get('/cheque-book-list',[ChequeBookController::class,'store'])->name('cheque-book-list');
    });
});


/* ==================================
    STAFF ROUTES STARTS
 ==================================*/

Route::prefix('staff')->name('staff-')->group(function () {
    Route::middleware(['guest:staff', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'staff.login')->name('login');
        Route::post('/logout', [StaffController::class, 'logout'])->name('logout');
        Route::post('/check', [StaffController::class, 'check'])->name('check');
    });
    Route::middleware(['auth:staff', 'PreventBackHistory'])->group(function () {
        Route::get('/', [StaffController::class, 'dashboard'])->name('dashboard');
        Route::get('/customers', [StaffController::class, 'customers'])->name('manage-customer');
        Route::get('/credit-money', [StaffController::class, 'creditMoneyIndex'])->name('credit-money');
        Route::post('/credit-money', [StaffController::class, 'creditMoneyCreate'])->name('credit-money');
        Route::get('/debit-money', [StaffController::class, 'debitMoneyIndex'])->name('debit-money');
        Route::post('/debit-money', [StaffController::class, 'debitMoneyCreate'])->name('debit-money');
        // Route::get('/transaction', [StaffController::class, 'transaction'])->name('transaction');
        Route::post('/logout', [StaffController::class, 'logout'])->name('logout');
        Route::get('/cheque-book-request',[ChequeBookController::class,'store'])->name('cheque-book-request');
        Route::get('/cheque-book-approve/{id}',[ChequeBookController::class,'approve'])->name('cheque-book-approve');
        Route::get('/cheque-book-decline/{id}',[ChequeBookController::class,'decline'])->name('cheque-book-decline');
        Route::get('/fixed-deposite-list',[FixedDepositeController::class,'store'])->name('fixed-deposite-list');
        Route::get('/fixed-deposite-approve/{id}',[FixedDepositeController::class,'approve'])->name('fixed-deposite-approve');
        Route::get('/fixed-deposite-decline/{id}',[FixedDepositeController::class,'decline'])->name('fixed-deposite-decline');
        Route::get('/AccountOpeningRequests',[AccountOpeningFormController::class,'AccountOpeningList'])->name('AccountOpeningList');
        Route::get('/AccountOpeningList/{id}',[AccountOpeningFormController::class,'AccountRequests'])->name('AccountRequests');

        // Route for approving account opening
        Route::get('/AccountOpeningApprove/{id}',[CustomerController::class,'ShiftData']);
        Route::get('/AccountOpeningDecline/{id}',[CustomerController::class,'DeclineData']);

        Route::get('/KYCList',[KYCFormController::class,'KYClist']);
        Route::get('/KYCRequests/{id}',[KYCFormController::class,'KYCRequests']);
        Route::get('/CreditList',[CustomerController::class,'CreditRequest']);
        Route::get('/CreditRequests/{id}',[CustomerController::class,'CreditRequests']);
        Route::get('/ShiftData',[CustomerController::class, 'ShiftData']);

        Route::get('/helpline', [AdminHelplinecontroller::class, 'issueStaff'])->name('helpline');
        Route::get('/helpline-view/{id}', [AdminHelplinecontroller::class, 'issuesStaff'])->name('helpline-view');
        Route::post('/helplineReply', [AdminHelplinecontroller::class, 'helplineReplyStaff'])->name('helplineReply');

        Route::get('/customer-details',[StaffController::class,'customerDetails'])->name('customer-details');
    });
});


/* ==================================
    CUSTOMER ROUTES STARTS
 ==================================*/

Route::prefix('customer')->name('customer-')->group(function () {
    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'customer.login')->name('login');
        // Route::view('/apply', 'AccountOpeningForm')->name('apply');
        Route::post('/check', [CustomerController::class, 'check'])->name('check');
        Route::post('/logout', [CustomerController::class, 'logout'])->name('logout');
    });

    /* ========================================================
        NO Authentication for Customer Now.
        It will be added once Customer Account Approval Done
    ===========================================================*/

    Route::middleware(['auth:customer', 'PreventBackHistory'])->group(function () {
    Route::get('/', [CustomerController::class, 'dashboard'])->name('dashboard');
    Route::post('/transaction-password', [CustomerController::class, 'TransactionPassword'])->name('transaction-password');
    Route::get('/account-details', [CustomerController::class, 'AccountDetails'])->name('account-details');
    Route::get('/transaction-details', [CustomerController::class, 'TransactionDetails'])->name('transaction-details');
    Route::get('/fund-transfer', [CustomerController::class, 'FundTransfer'])->name('fund-transfer');
    Route::get('/branch-change', [CustomerController::class, 'BranchChange'])->name('branch-change');
    Route::get('/fixed-deposite', [FixedDepositeController::class, 'FixedDeposite'])->name('fixed-deposite');
    Route::post('/fixed-deposite', [FixedDepositeController::class, 'create'])->name('fixed-deposite');
    Route::get('/fixed-deposite-reset/{id}', [FixedDepositeController::class, 'FixedDepositeReset'])->name('fixed-deposite-reset');
    Route::get('/cheque-book', [ChequeBookController::class, 'index'])->name('cheque-book');
    Route::post('/cheque-book', [ChequeBookController::class, 'create'])->name('cheque-book');
    Route::get('/cheque-book-reset/{id}', [ChequeBookController::class, 'reset'])->name('cheque-book-reset');
    Route::get('/branch-change', [ChangeBranchController::class, 'index'])->name('branch-change');
    Route::post('/branch-change', [ChangeBranchController::class, 'create'])->name('branch-change');
    Route::get('/branch-change-reset/{id}', [ChangeBranchController::class, 'reset'])->name('branch-change-reset');
    Route::get('/KYCForm', [KYCFormController::class, 'index']);
    Route::post('/KYCForm', [KYCFormController::class, 'create']);
    Route::get('/CreditCard', [CustomerController::class, 'CreditCard']);
    Route::post('/CreditCard', [CustomerController::class, 'CreateCreditCard']);
    });
});
