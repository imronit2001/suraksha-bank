<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Title --}}
    <title>@yield('title')</title>
    {{-- Web Icon  --}}
    <link rel="icon" type="image/x-icon" href="{{asset('images/switchbank.png')}}">
    {{-- Bootstrap  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> -->
    {{-- Css  --}}
    <!-- <link rel="stylesheet" href={{asset('css/admin/style.css')}}> -->
    <link rel="stylesheet" href="{{asset('css/customer/sidenav.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/changeBranch.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/fixedDeposite.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/transDetails.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/AccountDetails.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer/fundTransfer.css')}}">
    {{-- Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    {{-- Box Icon CDN  --}}
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    @livewireStyles
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-bank icon'></i>
            <div class="logo_name">Switch Bank</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{route('customer-dashboard')}}">
                    <i class='bx bxs-home'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            {{-- <li>
                <a href="{{url('/customer/AccountOpeningForm')}}">
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                    <span class="links_name">Account Opening Form</span>
                </a>
                <span class="tooltip">Account Opening Form</span>
            </li> --}}
            <li>
                <a href="{{route('customer-account-details')}}">
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                    <span class="links_name">Account Details</span>
                </a>
                <span class="tooltip">Account Details</span>
            </li>
            <li>
                <a href="{{route('customer-transaction-details')}}">
                    <i class='bx bx-transfer'></i>
                    <span class="links_name">Transaction Details</span>
                </a>
                <span class="tooltip">Transaction Details</span>
            </li>
            <li>
                <a href="{{url('/customer/KYCForm')}}">
                    <i class="fab fa-wpforms"></i>
                    <span class="links_name">KYC Form</span>
                </a>
                <span class="tooltip">KYC Form</span>
            </li>
            {{-- <li>
                <a href="{{url('/customer/CreditCard')}}">
                    <i class='fas fa-credit-card'></i>
                    <span class="links_name">Credit Card</span>
                </a>
                <span class="tooltip">Credit Card</span>
            </li> --}}
            {{-- <li>
                <a href="#">
                    <i class="bx bx-credit-card"></i>
                    <span class="links_name">Debit Card</span>
                </a>
                <span class="tooltip">Debit Card</span>
            </li> --}}
            {{-- <li>
              <div class="dropdown">
                  <i class='fas fa-hand-holding-usd'></i>
                    <button class="btn text-white dropdown-toggle" type="button" data-toggle="dropdown">Loans</button>
                    <ul class="dropdown-menu mx-2 p-1">
                        <li>
                            <a href="#">
                                <i class='bx bx-building-house'></i>
                                <span class="links_name">Home Loans</span>
                            </a>
                            <span class="tooltip">Home Loans</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class='bx bxs-book-reader'></i>
                                <span class="links_name">Study Loans</span>
                            </a>
                            <span class="tooltip">Study Loans</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class='bx bx-car'></i>
                                <span class="links_name">Car Loans</span>
                            </a>
                            <span class="tooltip">Car Loans</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class='bx bx-user-circle'></i>
                                <span class="links_name">Personal Loans</span>
                            </a>
                            <span class="tooltip">Personal Loans</span>
                        </li>
                      </ul>
              </div>
            </li> --}}
            <li>
                <a href="{{route('customer-transaction-password')}}">
                    <i class='bx bx-credit-card'></i>
                    <span class="links_name">Transaction Password</span>
                </a>
                <span class="tooltip">Transaction Password</span>
            </li>
            <li>
                <a href="{{route('customer-fixed-deposite')}}">
                    <i class='bx bx-credit-card'></i>
                    <span class="links_name"> Fixed Deposite</span>
                </a>
                <span class="tooltip">Fixed Deposite</span>
            </li>
            <li>
                <a href="{{route('customer-branch-change')}}">
                    <i class='bx bx-git-branch'></i>
                    <span class="links_name">Branch change</span>
                </a>
                <span class="tooltip">Branch change</span>
            </li>
            <li>
                <a href="{{route('customer-cheque-book')}}">
                    <i class='bx bxs-wallet-alt'></i>
                    <span class="links_name">Cheque Book</span>
                </a>
                <span class="tooltip">Cheque Book</span>
            </li>
            {{-- <li>
                <a href="{{route('admin-termsCondition')}}">
                    <i class='bx bxs-copy-alt'></i>
                    <span class="links_name">Terms & Conditions</span>
                </a>
                <span class="tooltip">Terms & Conditions</span>
            </li> --}}
            {{-- <li>
                <a href="{{route('admin-customer-helpline')}}">
                    <i class='bx bx-help-circle'></i>
                    <span class="links_name">Helpline</span>
                </a>
                <span class="tooltip">Helpline</span>
            </li> --}}
            {{-- <li>
                <a href="{{route('customer-change-password')}}">
                    <i class='bx bxs-lock'></i>
                    <span class="links_name">Change Password</span>
                </a>
                <span class="tooltip">Change Password</span>
            </li> --}}
            </li>
            <li>
                <a href="{{route('customer-transaction-password')}}">
                    <i class='bx bxs-copy-alt'></i>
                    <span class="links_name">Transaction Password</span>
                </a>
                <span class="tooltip">Transaction Password</span>
            </li>
            <li>
                <a href="{{route('customer-fund-transfer')}}">
                    <i class='bx bxs-copy-alt'></i>
                    <span class="links_name">Fund Transfer</span>
                </a>
                <span class="tooltip">Fund Transfer</span>
            </li>
            <li class="profile">
                  <!-- <a href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="links_name">logOut </span>
                </a>
                <span class="tooltip">logOut </span>  -->
                <form class="" action="{{url('../logout')}}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" name="logout">Logout</button>
                </form>
            </li>
        </ul>
    </div>
    <section class="home-section">
        @yield('page-name')
    </section>
    @livewireScripts
    <script src={{asset('js/admin/sidenavbar.js')}}></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
