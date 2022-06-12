<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="">
                <div class="form-floating w-75 min-width-75 mb-3">
                    <input type="text" class="form-control transparent-input" id="floatingInput"
                        placeholder="Account Holder's Name">
                    <label for="floatingInput">Account Holder's Name</label>
                </div>
                <div class="form-floating w-75 min-width-75 mb-3">
                    <input type="text" class="form-control transparent-input" id="floatingInput"
                        placeholder="Enter Account Number">
                    <label for="floatingInput">Enter Account Number</label>
                </div>
                <div class="form-floating w-75 min-width-75 mb-3">
                    <input type="password" class="form-control transparent-input" id="floatingInput"
                        placeholder="Re-Enter Account Number">
                    <label for="floatingInput">Re-Enter Account Number</label>
                </div>
                <div class="form-floating w-75 min-width-75 mb-3">
                    <input type="text" class="form-control transparent-input w-50 min-width-50" id="floatingInput"
                        placeholder="IFSC CODE">
                    <label for="floatingInput">IFSC CODE</label>
                </div>
                <div class="form-floating w-50 min-width-50 mb-3">
                    <input type="text" class="form-control transparent-input" id="floatingInput"
                        placeholder="Branch Name">
                    <label for="floatingInput">Branch Name</label>
                </div>
                <div class="form-floating w-50 min-width-50 mb-3">
                    <input type="text" class="form-control transparent-input" id="floatingInput"
                        placeholder="Enter Amount">
                    <label for="floatingInput">Enter Amount</label>
                </div>
                <div class="form-floating mb-3 w-25 min-width-25">
                    <input type="text" class="form-control transparent-input" id="floatingInput"
                        placeholder="UPI PIN">
                    <label for="floatingInput">UPI PIN</label>
                </div>
                <button class="btn btn-success m-auto">Submit</button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
                <div class="alert-danger">{{session('msg')}}</div>

               
                        
                        <div class="basic-form">
                            
                                <form method="post">
                            @csrf
                                <b>TO:</b>
                                <br>
                                <br>
                                <i class="fa fa-user"></i><input class="form-control" type="text" size="50" name="acc_num" Value=""
                                    placeholder="Enter Account Number">
                                    <div class="div alert-danger">{{$errors->first('acc_num')}}</div>
                                    <br>
                                <br>
                                <b>Amount:</b>
                                <br>
                                <br>
                                <input class="form-control" type="text" size="30" name="amount" Value="" placeholder="$0">
                                <div class="div alert-danger">{{$errors->first('amount')}}</div>
                                <br>
                                <br>
                                <b>Reference:</b>
                                <br>
                                <br>
                                <i class="fa fa-clipboard"></i><input class="form-control" type="text" size="30" name="ref" Value="" placeholder="Add a note">
                                <div class="div alert-danger">{{$errors->first('ref')}}</div>  
                                <br>
                                <br>
                                <b>Pin:</b>
                                <br>
                                <br>
                                <input class="form-control" type="password" size="30" name="password" Value="" placeholder="Enter Pin">
                                <div class="div alert-danger">{{$errors->first('password')}}</div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <button type="submit" class="btn btn-dark mb-2">Send</button>
                            
                                </form>
                                    </div>

                                </div>
                                
                            </div>