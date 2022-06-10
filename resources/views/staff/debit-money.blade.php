@extends('staff.home')
@section('title', 'Debit Money')
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
                url: "{{ route('staff-debit-money') }}",
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

    </script>
@endsection
