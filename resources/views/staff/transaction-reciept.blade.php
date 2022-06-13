@section('internal-css')
    <style>
        /*==================================================
                         * Effect 7
                         * ===============================================*/
        .effect7 {
            width: 75%;
            position: relative;
            -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
        }

        .effect7:before,
        .effect7:after {
            content: "";
            position: absolute;
            z-index: -1;
            -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
            -moz-box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
            top: 0;
            bottom: 0;
            left: 10px;
            right: 10px;
            -moz-border-radius: 100px / 10px;
            border-radius: 100px / 10px;
        }

        .effect7:after {
            right: 10px;
            left: auto;
            -webkit-transform: skew(8deg) rotate(3deg);
            -moz-transform: skew(8deg) rotate(3deg);
            -ms-transform: skew(8deg) rotate(3deg);
            -o-transform: skew(8deg) rotate(3deg);
            transform: skew(8deg) rotate(3deg);
        }

        @media only screen and (max-width: 900px) {
            .effect7 {
                width: 100%;
            }
        }
    </style>

    <div class=" w-75 d-flex justify-content-center align-items-center container" style="height: 100vh;">
        <div class="effect7 bg-light p-5 d-flex justify-content-center align-items-center flex-column">
            <h1 class="text-center blockquote text-dark " style="font-size: 30px;">Suraksha Bank</h1>
            <h1 class="text-center blockquote text-dark m-2 mb-3">Transaction Receipt</h1>
            <div class="w-100 d-flex justify-content-center align-items-center text-dark">
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">Customer Name</div>
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">{{ $name }}</div>
            </div>
            <div class="w-100 d-flex justify-content-center align-items-center">
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">Customer Id</div>
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">{{ $customerId }}</div>
            </div>
            <div class="w-100 d-flex justify-content-center align-items-center">
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">Account Number</div>
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">{{ $accountNo }}</div>
            </div>
            <div class="w-100 d-flex justify-content-center align-items-center">
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">Transaction Id</div>
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">{{ $transactionId }}</div>
            </div>
            <div class="w-100 d-flex justify-content-center align-items-center">
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">Amount
                    @if ($mode == 'credit')
                        Credited
                    @elseif($mode == 'debit')
                        Debited
                    @endif
                </div>
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">{{ $amount }}</div>
            </div>
            <div class="w-100 d-flex justify-content-center align-items-center">
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">Available Balance</div>
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">{{ $balance }}</div>
            </div>
            <div class="w-100 d-flex justify-content-center align-items-center">
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">Date</div>
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">{{ $date }}</div>
            </div>
            <div class="w-100 d-flex justify-content-center align-items-center">
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">Time</div>
                <div class="w-50 text-dark blockquote" style="font-size: 16px;">{{ $time }}</div>
            </div>
            <div class="w-100 mt-4 d-flex justify-content-center align-items-center flex-column">
                <div class="w-50 m-0 p-0 text-center text-dark blockquote" style="font-size: 18px;">
                    @php
                        echo Auth::user()->fullName;
                    @endphp
                </div>
                <div class="w-50 m-0 p-0 text-center border-top border-dark border-2 text-dark blockquote"
                    style="font-size: 16px;">Bank Official Signature</div>
            </div>
        </div>
    </div>
