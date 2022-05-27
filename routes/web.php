<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountOpeningFormController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CustomerCareController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\KYCFormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AddManagerFormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddStaffFormController;
use App\Http\Controllers\StaffController;
// use App\Models\AddStaffForm;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ChangeBranchController;

// Landing Routes
Route::get('/AboutUs',[AboutController::class, 'index']);
Route::get('/AccountOpeningForm',[AccountOpeningFormController::class, 'index']);
Route::get('/Cards',[CardController::class, 'index']);
Route::get('/CustomerCare',[CustomerCareController::class, 'index']);
Route::get('/',[indexController::class, 'index']);
Route::get('/KYC',[KYCFormController::class, 'index']);
Route::get('/Offers',[OffersController::class, 'index']);
Route::get('/OurServices',[ServiceController::class, 'index']);



// Admin Routes
Route::prefix('/admin')->group(function(){
    Route::get('/',[AdminController::class,'dashboard'])->name('admin-dashboard');
    Route::get('/bank-balance',[AdminController::class,'bankBalance'])->name('admin-bank-balance');
    Route::get('/add-staff',[AddStaffFormController::class,'index'])->name('admin-add-staff');
    Route::post('/add-staff',[AddStaffFormController::class,'create'])->name('admin-add-staff');
    Route::get('/edit-staff/{id}',[AddStaffFormController::class,'edit'])->name('admin-edit-staff');
    Route::post('/edit-staff/{id}',[AddStaffFormController::class,'update'])->name('admin-edit-staff');
    Route::get('/manage-staff',[AdminController::class,'manageStaff'])->name('admin-manage-staff');
    Route::get('/staff-details/{id}',[AdminController::class,'staffDetails'])->name('admin-staff-details');
    Route::get('/remove-staff/{id}',[AddStaffFormController::class,'destroy'])->name('admin-remove-staff');
    Route::get('/add-manager',[AddManagerFormController::class,'index'])->name('admin-add-manager');
    Route::post('/add-manager',[AddManagerFormController::class,'create'])->name('admin-add-manager');
    Route::get('/managers',[AdminController::class,'managers'])->name('admin-managers');
    Route::get('/edit-manager/{id}',[AddManagerFormController::class,'edit'])->name('admin-edit-manager');
    Route::post('/edit-manager/{id}',[AddManagerFormController::class,'update'])->name('admin-edit-manager');
    Route::get('/manager-details/{id}',[AdminController::class,'managerDetails'])->name('admin-manager-details');
    Route::get('/manage-customer',[AdminController::class,'manageCustomer'])->name('admin-manage-customer');
    Route::get('/customer-transaction-detail',[AdminController::class,'customerTransactionDetail'])->name('admin-customer-transaction-detail');
    Route::get('/branch-change',[AdminController::class,'branchChange'])->name('admin-branch-change');
    Route::get('/fixed-deposit',[AdminController::class,'fixedDeposit'])->name('admin-fixed-deposit');
    Route::get('/terms-condition',[AdminController::class,'termsCondition'])->name('admin-terms-condition');
});


Route::get('/staff',[StaffController::class,'dashboard'])->name('staff-dashboard');
// Route::get('/admin',[AdminController::class,'dashboard'])->name('admin-dashboard');
// Route::get('/admin/add-staff',[AdminController::class,'addStaff'])->name('admin-add-staff');
// Route::get('/admin/manage-staff',[AdminController::class,'manageStaff'])->name('admin-manage-staff');
// Route::get('/admin/staff-details',[AdminController::class,'staffDetails'])->name('admin-staff-details');
// Route::get('/admin/add-manager',[AdminController::class,'addManager'])->name('admin-add-manager');
// Route::get('/admin/manage-customer',[AdminController::class,'manageCustomer'])->name('admin-manage-customer');
// Route::get('/admin/customer-transaction-detail',[AdminController::class,'customerTransactionDetail'])->name('admin-customer-transaction-detail');
// Route::get('/admin/branch-change',[AdminController::class,'branchChange'])->name('admin-branch-change');
// Route::get('/admin/fixed-deposit',[AdminController::class,'fixedDeposit'])->name('admin-fixed-deposit');
// Route::get('/admin/terms-condition',[AdminController::class,'termsCondition'])->name('admin-terms-condition');

Route::get('/customer/transaction-password',[CustomerController::class,'TransactionPassword'])->name('customer-transaction-password');
Route::get('customer/account-details',[CustomerController::class,'AccountDetails'])->name('customer-account-details');
Route::get('/customer/transaction-details',[CustomerController::class,'TransactionDetails'])->name('customer-transaction-details');
Route::get('/customer/fund-transfer',[CustomerController::class,'FundTransfer'])->name('customer-fund-transfer');
Route::get('/customer/branch-change',[CustomerController::class,'BranchChange'])->name('customer-branch-change');
Route::get('/customer/fixed-deposite',[CustomerController::class,'FixedDeposite'])->name('customer-fixed-deposite');
Route::get('/customer/cheque-book',[CustomerController::class,'ChequeBook'])->name('customer-cheque-book');
Route::get('/customer/branch-change',[ChangeBranchController::class,'index'])->name('customer-branch-change');
Route::post('/customer/branch-change',[ChangeBranchController::class,'create'])->name('customer-branch-change');
