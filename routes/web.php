<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Admin Routes

Route::get('/admin',[AdminController::class,'dashboard'])->name('admin-dashboard');
Route::get('/admin/bank-balance',[AdminController::class,'bank-balance'])->name('admin-bank-balance');
Route::get('/admin/add-staff',[AdminController::class,'add-staff'])->name('admin-add-staff');
Route::get('/admin/manage-staff',[AdminController::class,'manage-staff'])->name('admin-manage-staff');
Route::get('/admin/add-manager',[AdminController::class,'add-manager'])->name('admin-add-manager');
Route::get('/admin/manage-customer',[AdminController::class,'manage-customer'])->name('admin-manage-customer');
Route::get('/admin/branch-change',[AdminController::class,'branch-change'])->name('admin-branch-change');
Route::get('/admin/fixed-deposit',[AdminController::class,'fixed-deposit'])->name('admin-fixed-deposit');
Route::get('/admin/terms-condition',[AdminController::class,'terms-condition'])->name('admin-terms-condition');









Route::get('/',function(){
    return view('welcome');
});

