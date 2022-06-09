<?php

namespace App\Http\Controllers;

use App\Models\AddManagerForm;
use App\Models\AddStaffForm;
use App\Models\change_branch;
use App\Models\CustomerData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function dashboard()
    {
        $staffs = AddStaffForm::all();
        $staff = $staffs->count();
        $managers = AddManagerForm::all();
        $manager = $managers->count();
        $changeBranch = change_branch::all();
        $changeBranchList = $changeBranch->count();


        $data = ['staff'=> $staff , 'manager'=> $manager , 'changeBranchList'=>$changeBranchList] ;
        return view('admin.dashboard',$data);
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
        $applications = change_branch::where("status", 0)->get();
        return view('admin.branch-change',['applications'=>$applications]);
    }
    public function branchChangeView($id)
    {
        $applications = change_branch::find($id);
        return view('admin.branch-change-view',['applications'=>$applications]);
    }
    public function branchChangeApprove($id)
    {
        $applications = change_branch::find($id);
        $users = DB::table('customer_data')
                ->where('customerId', '=', $applications->cId)
                ->first();
        $customer = CustomerData::find($users->id);
        $customer->branchName = $applications->newBranchName;
        $customer->save();
        $applications->status = "1";
        $applications->save();
        $applications = change_branch::where("status", 0)->get();
        // return view('admin.branch-change',['applications'=>$applications]);
        return redirect((route('admin-branch-change',['applications'=>$applications])));
    }
    public function branchChangeDecline($id)
    {
        $applications = change_branch::find($id);
        $applications->status = "2" ;
        $applications->save();
        $applications = change_branch::where("status", 0)->get();
        // return view('admin.branch-change',['applications'=>$applications]);
        return redirect((route('admin-branch-change',['applications'=>$applications])));
    }
    public function fixedDeposit()
    {
        return view('admin.fixed-deposit');
    }
    public function termsCondition()
    {
        return view('admin.termsCondition');
    }
}
