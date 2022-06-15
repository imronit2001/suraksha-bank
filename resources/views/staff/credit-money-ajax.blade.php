@if (count($customers) > 0)
    <div class="verification" id="verification">
        <div class="img">
            <img src={{ $customers[0]->ApplicantPhoto }} alt="">
            <img class="sign" src={{ $customers[0]->ApplicantSignature }} alt="">
        </div>
        <div class="text">
            <h1 class="name">Name : {{ $customers[0]->FullName }}</h1>
            <h1 class="balance">Available Balance : {{ $customers[0]->balance }}</h1>
        </div>
    </div>

    <div class="search-box">
        <input type="text" name="amount" id="amount" class="form-control" oninput="checkcredit();"
            placeholder="Enter Amount">
    </div>

    <div class="note-detail">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Detail of Note</th>
                    <th scope="col">No of Note</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">2000 *</th>
                    <td><input type="number" name="note0200" id="note2000" oninput="calcAmount2000(this.value);"></td>
                    <td id="amount2000">0</td>
                </tr>
                <tr>
                    <th scope="row">500 *</th>
                    <td><input type="number" name="note500" id="note500" oninput="calcAmount500(this.value);"></td>
                    <td id="amount500">0</td>
                </tr>
                <tr>
                    <th scope="row">200 *</th>
                    <td><input type="number" name="note200" id="note200" oninput="calcAmount200(this.value);"></td>
                    <td id="amount200">0</td>
                </tr>
                <tr>
                    <th scope="row">100 *</th>
                    <td><input type="number" name="note100" id="note100" oninput="calcAmount100(this.value);"></td>
                    <td id="amount100">0</td>
                </tr>
                <tr>
                    <th scope="row">50 *</th>
                    <td><input type="number" name="note50" id="note50" oninput="calcAmount50(this.value);"></td>
                    <td id="amount50">0</td>
                </tr>
                <tr>
                    <th scope="row">20 *</th>
                    <td><input type="number" name="note20" id="note20" oninput="calcAmount20(this.value);"></td>
                    <td id="amount20">0</td>
                </tr>
                <tr>
                    <th scope="row">10 *</th>
                    <td><input type="number" name="note10" id="note10" oninput="calcAmount10(this.value);"></td>
                    <td id="amount10">0</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="pin-check">
        <input type="text" name="pin" id="pin" class="form-control" placeholder="Enter PIN" oninput="checkcredit();">
        <button class="btn btn-success" id="credit" onclick="creditmoney();">Credit</button>
        <button type="reset" class="btn btn-info">Cancel</button>
    </div>
    <div id="message" class="w-50 m-auto d-flex justify-contents-center">



    </div>


    {{-- </form> --}}
@else
    <p class="text-center text-secondary">No Account Found</p>
@endif

<script>
    var credit = document.getElementById("credit");

    credit.disabled = true;

    function checkcredit() {
        var amount = document.getElementById("amount").value;
        var pin = document.getElementById("pin").value;
        if (amount.length > 0 && pin.length == 4) {
            credit.disabled = false;
        } else {
            credit.disabled = true;

        }
    }

    function creditmoney() {
        var amount = document.getElementById("amount").value;
        var pin = document.getElementById("pin").value;
        var aNo = $('#aNo').val();
        var val = 2;
        // alert(amount + pin + aNo + val);
        $.ajax({
            url: "{{ route('staff-credit-money') }}",
            type: "GET",
            data: {
                'val': val,
                'aNo': aNo,
                'amount': amount,
                'pin': pin,
            },
            success: function(data) {
                if (val == 2) {
                    $("#main").html(data);
                    // document.getElementById("show-none").innerHTML = "";
                }
            }
        });

    }
</script>
