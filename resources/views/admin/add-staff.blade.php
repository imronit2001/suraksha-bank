@extends('admin.home')
@section('title','Add Staff')
@section('page-name')
    <main>
        <div class="staff-heading">
        <h1 class="bankname text-center font-weight-bold">Suraksha Bank</h1>
        <h1 class="branchname text-center font-weight-light">Branch Name : Kolkata</h1>
        </div>

        <div class="container register">
            <div class="row">
                <div class="col-md-12 register-right">
                    <div class="tab-content" id="">
                        <div class="" id="" role="">
                            <h3 class="register-heading">Add Employee Form</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Employee Type *</option>
                                        <option>Full Time</option>
                                        <option>Part Time</option>
                                    </select>
                                </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option class="hidden" selected disabled>Branch Name *</option>
                                            <option>Kolkata</option>
                                            <option>Hooghly</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option class="hidden" selected disabled>Designation *</option>
                                            <option>Mr</option>
                                            <option>Mrs</option>
                                            <option>Miss</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Middle Name " value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control" placeholder="DOB *" value="" />
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Id *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="10" name="txtEmpPhone"
                                        class="form-control" placeholder="Contact No *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="male" >
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female">
                                                <span>Female </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="Marital Status" value="Married" >
                                                <span> Married </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="Marital Status" value="Unmarried">
                                                <span>Unmarried </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="Marital Status" value="Divorced">
                                                <span>Divorced </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option class="hidden" selected disabled>Higher Qualification</option>
                                            <option>Graduation</option>
                                            <option>Post Graduation</option>
                                            <option>Matriculation</option>
                                            <option>Higher Secondary</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option class="hidden" selected disabled>Category</option>
                                            <option>General</option>
                                            <option>ST</option>
                                            <option>SC</option>
                                            <option>OBC</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option class="hidden" selected disabled>Disability</option>
                                            <option>YES</option>
                                            <option>NO</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Father's Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Mother's Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Guardian's Name *" value="" />
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="City *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="District *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="State *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="06" maxlength="06" name="txtEmppin"
                                            class="form-control" placeholder="Pin Code *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="12" maxlength="12" name="txtEmppin"
                                            class="form-control" placeholder="Aadhar Number *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="12" maxlength="12" name="txtEmppin"
                                            class="form-control" placeholder="Pan Number *" value="" />
                                    </div>
                                    <div class="File"> <label><h6>Upload Aadhar Card</h6></label>
                                        <input type="file"
                                        accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"
                                        value="" />
                                    </div>
                                    <div class="File"> <label><h6>Upload Pan Card</h6></label>
                                        <input type="file"
                                        accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"
                                        value="" />
                                    </div>
                                    <div class="File"> <label><h6>Upload Photo</h6></label>
                                        <input type="file"
                                        accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"
                                        value="" />
                                    </div>
                                    <div class="File"> <label><h6>Upload Signature</h6></label>
                                        <input type="file"
                                        accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"
                                        value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User Id *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Password *" value="" />
                                    </div>
                                    <input type="submit" class="btnRegister btn btn-primary" value="Register" />
                                    <input type="reset" class="btnRegister btn btn-danger" value="Clear" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection