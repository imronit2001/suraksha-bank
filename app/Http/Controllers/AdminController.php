<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function bankBalance()
    {
        return view('admin.bank-balance');
    }
    public function addStaff()
    {
        return view('admin.add-staff');
    }
    public function manageStaff()
    {
        return view('admin.manage-staff');
    }
    public function addManager()
    {
        return view('admin.add-manager');
    }
    public function manageCustomer()
    {
        return view('admin.manage-customer');
    }
    public function branchChange()
    {
        return view('admin.branch-change');
    }
    public function fixedDeposit()
    {
        return view('admin.fixed-deposit');
    }
    public function termsCondition()
    {
        return view('admin.terms-condition');
    }
}
