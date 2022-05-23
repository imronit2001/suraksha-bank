<?php

namespace App\Http\Controllers;

use App\Models\AddManagerForm;
use App\Models\AddStaffForm;
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
        $staff = AddStaffForm::all();
        return view('admin.manage-staff', ['staff' => $staff]);
    }
    public function staffDetails($id)
    {
        $staff = AddStaffForm::find($id);
        return view('admin.staff-details', ['staff' => $staff]);
    }
    public function managers()
    {
        $manager = AddManagerForm::all();
        return view('admin.manager',['manager'=>$manager]);
    }
    public function manageCustomer()
    {
        return view('admin.manage-customer');
    }
    public function managerDetails($id)
    {
        $manager = AddManagerForm::find($id);
        return view('admin.manager-details', ['manager' => $manager]);
    }
    public function customerTransactionDetail()
    {
        return view('admin.customer-transaction-detail');
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
