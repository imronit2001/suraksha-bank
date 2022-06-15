@if (count($customers) > 0)
    <div class="verification">
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
            <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter Amount">
        </div>

        <div class="pin-check">
            <input type="text" name="pin" id="pin" class="form-control" oninput="checkdebit();" placeholder="Enter PIN">
            <button class="btn btn-success" name="debit" id="debit" onclick="debitmoney();">Debit</button>
            <button type="reset" class="btn btn-info">Cancel</button>
        </div>

@else
    <p class="text-center text-secondary">No Account Found</p>
@endif



<script>
    var debit = document.getElementById("debit");

    debit.disabled = true;

    function checkdebit() {
        var amount = document.getElementById("amount").value;
        var pin = document.getElementById("pin").value;
        if (amount.length > 0 && pin.length == 4) {
            debit.disabled = false;
        } else {
            debit.disabled = true;

        }
    }

    function debitmoney() {
        var amount = document.getElementById("amount").value;
        var pin = document.getElementById("pin").value;
        var aNo = $('#aNo').val();
        var val = 2;
        // alert(amount + pin + aNo + val);
        $.ajax({
            url: "{{ route('staff-debit-money') }}",
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
