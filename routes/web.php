<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\termsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountOpeningFormController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CustomerCareController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\KYCFormController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AddManagerFormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddStaffFormController;
use App\Http\Controllers\StaffController;
use App\Models\AddStaffForm;
use App\Http\Controllers\Helplinecontroller;
use App\Http\Controllers\AdminHelplinecontroller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ChangeBranchController;
// use App\Http\Livewire\FormHandle;


// LANDING PAGE ROUTES STARTS
Route::get('/',[indexController::class, 'index']);
Route::get('/AboutUs',[AboutController::class, 'index']);
Route::get('/AboutUs',[AboutController::class, 'index']);
Route::get('/Cards',[CardController::class, 'index']);
Route::get('/CustomerCare', [CustomerCareController::class, 'index'])->name('index');
Route::post('/CustomerCare', [CustomerCareController::class, 'create'])->name('create');
Route::get('/Offers',[OffersController::class, 'index']);
Route::get('/OurServices',[ServiceController::class, 'index']);
Route::get('/redirects',[LoginController::class,'index']);
Route::get('/termsCondition',[termsController::class, 'index']);
Route::get('/auth/login',[LoginController::class, 'login']);
Route::get('/addStaff',[LoginController::class, 'add_staff']);
Route::get('/logout', ['LoginController@logout']);
Route::get('/AccountOpeningForm',[AccountOpeningFormController::class, 'index']);
Route::post('/AccountOpeningForm',[AccountOpeningFormController::class, 'create']);
// Route::post()
Route::get('/termsCondition',[termsController::class, 'index']);




// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ADMIN ROUTES STARTS HERE
Route::prefix('/admin')->group(function(){// dashboard
    Route::get('/',[AdminController::class,'dashboard'])->name('admin-dashboard');// bank balance
    Route::get('/bank-balance',[AdminController::class,'bankBalance'])->name('admin-bank-balance');// add staff
    Route::get('/add-staff',[AddStaffFormController::class,'index'])->name('admin-add-staff');
    // Route::post('/add-staff',[AddStaffFormController::class,'create'])->name('admin-add-staff');  // edit staff
    Route::get('/edit-staff/{id}',[AddStaffFormController::class,'edit'])->name('admin-edit-staff');
    Route::post('/edit-staff/{id}',[AddStaffFormController::class,'update'])->name('admin-edit-staff');  // manager staff
    Route::get('/manage-staff',[AdminController::class,'manageStaff'])->name('admin-manage-staff');  // view staff details
    Route::get('/staff-details/{id}',[AdminController::class,'staffDetails'])->name('admin-staff-details');  // remove staff
    Route::get('/remove-staff/{id}',[AddStaffFormController::class,'destroy'])->name('admin-remove-staff');  // add manager
    Route::get('/add-manager',[AddManagerFormController::class,'index'])->name('admin-add-manager');
    Route::post('/add-manager',[AddManagerFormController::class,'create'])->name('admin-add-manager');  // view managers
    Route::get('/managers',[AdminController::class,'managers'])->name('admin-managers');  // edit managers
    Route::get('/edit-manager/{id}',[AddManagerFormController::class,'edit'])->name('admin-edit-manager');
    Route::post('/edit-manager/{id}',[AddManagerFormController::class,'update'])->name('admin-edit-manager');  // manager details
    Route::get('/manager-details/{id}',[AdminController::class,'managerDetails'])->name('admin-manager-details');  // manager customers
    Route::get('/manage-customer',[AdminController::class,'manageCustomer'])->name('admin-manage-customer');  // customer transaction details
    Route::get('/customer-transaction-detail',[AdminController::class,'customerTransactionDetail'])->name('admin-customer-transaction-detail');  // branch change applications
    Route::get('/branch-change',[AdminController::class,'branchChange'])->name('admin-branch-change');  // branch change view application
    Route::get('/branch-change/{id}',[AdminController::class,'branchChangeView'])->name('admin-branch-change-view');  // approve branch change
    Route::get('/branch-change-approve/{id}',[AdminController::class,'branchChangeApprove'])->name('admin-branch-change-approve');  // decline branch change
    Route::get('/branch-change-decline/{id}',[AdminController::class,'branchChangeDecline'])->name('admin-branch-change-decline');  // fixed deposit
    Route::get('/fixed-deposit',[AdminController::class,'fixedDeposit'])->name('admin-fixed-deposit');  // term and condition
    Route::get('/termsCondition',[AdminController::class,'termsCondition'])->name('admin-termsCondition');
    Route::post('/add_staff',[LoginController::class,'add_staff']);
});

// STAFF ROUTES STARTS HERE
Route::prefix('/staff')->group(function(){
    Route::get('/',[StaffController::class,'dashboard'])->name('staff-dashboard');
    Route::get('/credit-money',[StaffController::class,'creditMoneyIndex'])->name('staff-credit-money');
    Route::post('/credit-money',[StaffController::class,'creditMoneyCreate'])->name('staff-credit-money');
    Route::get('/debit-money',[StaffController::class,'debitMoneyIndex'])->name('staff-debit-money');
    Route::post('/debit-money',[StaffController::class,'debitMoneyCreate'])->name('staff-debit-money');
});
Route::get('/issue', [StaffController::class, 'issue'])->name('issue');
Route::get('/issue', [AdminHelplinecontroller::class, 'issue'])->name('issue');

// CUSTOMER ROUTES STARTS HERE
Route::prefix('/customer')->group(function(){
    Route::get('/',[CustomerController::class,'dashboard'])->name('customer-dashboard');
    Route::get('/transaction-password',[CustomerController::class,'TransactionPassword'])->name('customer-transaction-password');
    Route::get('/account-details',[CustomerController::class,'AccountDetails'])->name('customer-account-details');
    Route::get('/transaction-details',[CustomerController::class,'TransactionDetails'])->name('customer-transaction-details');
    Route::get('/fund-transfer',[CustomerController::class,'FundTransfer'])->name('customer-fund-transfer');
    Route::get('/branch-change',[CustomerController::class,'BranchChange'])->name('customer-branch-change');
    Route::get('/fixed-deposite',[CustomerController::class,'FixedDeposite'])->name('customer-fixed-deposite');
    Route::get('/issue', [AdminHelplinecontroller::class, 'issue'])->name('issue');
    Route::get('/cheque-book',[CustomerController::class,'ChequeBook'])->name('customer-cheque-book');
    Route::get('/branch-change',[ChangeBranchController::class,'index'])->name('customer-branch-change');
    Route::post('/branch-change',[ChangeBranchController::class,'create'])->name('customer-branch-change');
    Route::get('/KYCForm',[KYCFormController::class, 'index']);
    Route::post('/KYCForm',[KYCFormController::class, 'create']);
    Route::get('/AccountOpeningForm',[AccountOpeningFormController::class, 'index']);
    Route::post('/AccountOpeningForm',[AccountOpeningFormController::class, 'create']);
    // Route::view('/form-handle',FormHandle::class);

    // Route::get('/dashboard',function(){return view('/customer/dashboard');});
    Route::resource('customer', 'AccountOpeningFormController');
});
Route::get('/addStaff',[LoginController::class, 'add_staff']);
Route::get('/logout', ['LoginController@logout']);
Route::get('/termsCondition',[termsController::class, 'index']);

    // Route::get('/welcome',function(){
    //     return view('welcome');
    // });
    // Route::get('',function(){
    //     return view('/customer/password-change');
    // });
// Route::post()







