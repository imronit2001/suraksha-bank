@if (count($customers) > 0)
    <div class="verification">
        <div class="img">
            <img src={{ asset('images/ronit.JPG') }} alt="">
            <img class="sign" src={{ asset('images/signature.webp') }} alt="">
        </div>
        <div class="text">
            <h1 class="name">Name : {{ $customers[0]->customerName }}</h1>
            <h1 class="balance">Available Balance : {{ $customers[0]->balance }}</h1>
        </div>
    </div>
    <form action="">
        <div class="search-box">
            <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter Amount">
        </div>

        <div class="pin-check">
            <input type="text" name="pin" id="pin" class="form-control" placeholder="Enter PIN">
            <button class="btn btn-success" name="debit" id="debit">Debit</button>
            <button type="reset" class="btn btn-info">Cancel</button>
        </div>
    </form>
@else
    <p class="text-center text-secondary">No Account Found</p>
@endif
