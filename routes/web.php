<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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









Route::get('/',function(){
    return view('welcome');
});

