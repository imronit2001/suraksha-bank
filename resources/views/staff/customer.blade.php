@extends('staff.home')
@section('title', 'Customer')
@section('page-name')

    <main class="m-2 p-3 border">
        <div class="bank-heading">
            <h1 class="bank-name">Suraksha Bank</h1>
            <h1 class="branch-name">Branch : {{ Auth::user()->branch }}</h1>
        </div>
        <div class="form-container">
            <div class="search-box">
                <input type="text" class="form-control mr-2" maxlength="14" minlength="14" id="aNo"
                    oninput="inputAccount(this.value);" placeholder="Account Number">
                <button type="submit" class="btn btn-primary ml-2" id="searchAccount" onclick="clickhere()">Search</button>
            </div>
            <div id="customer-data">
                <div class="verification" id="verification">
                    <div class="img">
                        <img src={{ asset('images/ronit.JPG') }} alt="">
                        <img class="sign" src={{ asset('images/signature.webp') }} alt="">
                    </div>
                    <div class="text">
                        <h1 class="name">Name : </h1>
                        <h1 class="balance">Available Balance :</h1>
                    </div>
                </div>


            </div>
        </div>
    </main>

    <script>
        var searchAccount = document.getElementById("searchAccount");
        searchAccount.disabled = true;


        function clickhere() {
            var aNo = $('#aNo').val();
            alert(aNo);
            var val = 1;
            $.ajax({
                url: "{{ route('staff-manage-customer') }}",
                type: "GET",
                data: {
                    'val': val,
                    'aNo': aNo,
                },
                success: function(data) {
                    if (val == 1)
                        $("#verification").html(data);
                        // alert("Suecs");
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
