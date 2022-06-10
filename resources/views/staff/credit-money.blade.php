@extends('staff.home')
@section('title', 'Credit Money')
@section('page-name')
    <div class="main" id="main">
        <div class="bank-heading">
            <h1 class="bank-name">Suraksha Bank</h1>
            <h1 class="branch-name">Branch : Kolkata</h1>
        </div>
        <div class="form-container">
            <div class="search-box">
                <input type="text" class="form-control mr-2" maxlength="14" minlength="14" id="aNo"
                    oninput="inputAccount(this.value);" placeholder="Account Number">
                <button type="submit" class="btn btn-primary ml-2" id="searchAccount" onclick="clickhere()">Search</button>
            </div>

            <div id="customer-data">

            </div>
        </div>

    </div>

    <script>

        var searchAccount = document.getElementById("searchAccount");
        searchAccount.disabled = true;


        function clickhere() {
            var aNo = $('#aNo').val();
            var val = 1;
            $.ajax({
                url: "{{ route('staff-credit-money') }}",
                type: "GET",
                data: {
                    'val' : val,
                    'aNo': aNo,
                },
                success: function(data) {
                    if(val==1)
                    $("#customer-data").html(data);
                }
            });
        }

        function inputAccount(aNo) {
            if (aNo.length == 14) {
                searchAccount.disabled = false;
            } else {
                searchAccount.disabled = true;
            }
        }


        function calcAmount2000(amount) {
            document.getElementById("amount2000").innerHTML = amount * 2000;
        }

        function calcAmount500(amount) {
            document.getElementById("amount500").innerHTML = amount * 500;
        }

        function calcAmount200(amount) {
            document.getElementById("amount200").innerHTML = amount * 200;
        }

        function calcAmount100(amount) {
            document.getElementById("amount100").innerHTML = amount * 100;
        }

        function calcAmount50(amount) {
            document.getElementById("amount50").innerHTML = amount * 50;
        }

        function calcAmount20(amount) {
            document.getElementById("amount20").innerHTML = amount * 20;
        }

        function calcAmount10(amount) {
            document.getElementById("amount10").innerHTML = amount * 10;
        }
    </script>

@endsection
