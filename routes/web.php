<?php

use App\Http\Controllers\AddManagerFormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddStaffFormController;
use App\Http\Controllers\StaffController;
use App\Models\AddStaffForm;
use Illuminate\Support\Facades\Route;

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
    Route::get('/manage-customer',[AdminController::class,'manageCustomer'])->name('admin-manage-customer');
    Route::get('/customer-transaction-detail',[AdminController::class,'customerTransactionDetail'])->name('admin-customer-transaction-detail');
    Route::get('/branch-change',[AdminController::class,'branchChange'])->name('admin-branch-change');
    Route::get('/fixed-deposit',[AdminController::class,'fixedDeposit'])->name('admin-fixed-deposit');
    Route::get('/terms-condition',[AdminController::class,'termsCondition'])->name('admin-terms-condition');
});

// Staff Routes

Route::get('/staff',[StaffController::class,'dashboard'])->name('staff-dashboard');







Route::get('/',function(){
    return view('welcome');
});

