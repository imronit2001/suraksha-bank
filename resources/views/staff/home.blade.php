<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Title --}}
    <title>@yield('title')</title>
    {{-- Web Icon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/switchbank.png') }}">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- Css --}}
    <link rel="stylesheet" href={{ asset('css/staff/style.css') }}>
    <link rel="stylesheet" href={{ asset('css/admin/sidenavbar.css') }}>
    {{-- Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- Box Icon CDN --}}
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    @yield('internal-css')

</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-bank icon'></i>
            <div class="logo_name">Suraksha Bank</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{ route('staff-dashboard') }}">
                    <i class='bx bxs-home'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="{{url('staff/AccountOpeningRequests')}}">
                    <i class='bx bx-user-plus'></i>
                    <span class="links_name">New a/c Application</span>
                </a>
                <span class="tooltip">New a/c Application</span>
            </li>
            <li>
                <a href="{{url('staff/CreditList')}}">
                    <i class='bx bx-credit-card'></i>
                    <span class="links_name">Credit Card Request</span>
                </a>
                <span class="tooltip">Credit Card Request</span>
            </li>
            <!-- <li>
                <a href="#">
                    <i class='bx bxl-mastercard'></i>
                    <span class="links_name">Debit Card Request</span>
                </a>
                <span class="tooltip">Debit Card Request</span>
            </li> -->
            <li>
                <a href="{{ route('staff-credit-money') }}">
                    <i class='bx bx-plus'></i>
                    <span class="links_name">Credit Money</span>
                </a>
                <span class="tooltip">Credit Money</span>
            </li>
            <li>
                <a href="{{ route('staff-debit-money') }}">
                    <i class='bx bx-minus'></i>
                    <span class="links_name">Debit Money</span>
                </a>
                <span class="tooltip">Debit Money</span>
            </li>
            <li>
                <a href="{{ route('staff-manage-customer') }}">
                    <i class='bx bxs-user-detail'></i>
                    <span class="links_name">Manage Customers</span>
                </a>
                <span class="tooltip">Manage Customers</span>
            </li>
            <li>
                <a href="{{url('staff/KYCList')}}">
                    <i class='bx bxs-edit'></i>
                    <span class="links_name">KYC Application</span>
                </a>
                <span class="tooltip">KYC Application</span>
            </li>
            {{-- <li>
                <a href="#">
                    <i class='bx bxs-book-alt'></i>
                    <span class="links_name">Passbook Request</span>
                </a>
                <span class="tooltip">Passbook Request</span>
            </li> --}}
            <li>
                <a href="{{ route('staff-cheque-book-request') }}">
                    <i class='bx bx-book'></i>
                    <span class="links_name">ChequeBook Request</span>
                </a>
                <span class="tooltip">ChequeBook Request</span>
                {{-- </li>
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
            <li> --}}
                <a href="#">
                    <i class='bx bx-credit-card'></i>
                    <span class="links_name">Credit Card a/c</span>
                </a>
                <span class="tooltip">Credit Card a/c</span>
            </li>
            {{-- <li>
                <a href="#">
                    <i class='bx bxs-wallet'></i>
                    <span class="links_name">Fixed Deposits</span>
                </a>
                <span class="tooltip">Fixed Deposits</span>
            </li> --}}
            {{-- <li>
                <a href="#">
                    <i class='bx bxs-contact'></i>
                    <span class="links_name">Contact Customers</span>
                </a>
                <span class="tooltip">Contact Customers</span>
            </li> --}}
            <li>
                <a href="#">
                    <i class='bx bx-block'></i>
                    <span class="links_name">Blocked Accounts</span>
                </a>
                <span class="tooltip">Blocked Accounts</span>
            </li>
            {{-- <li>
                <a href="#">
                    <i class='bx bxs-copy-alt'></i>
                    <span class="links_name">Terms & Conditions</span>
                </a>
                <span class="tooltip">Terms & Conditions</span>
            </li> --}}
            <li>
                <a href="{{route('staff-helpline')}}">
                    <i class='bx bx-help-circle'></i>
                    <span class="links_name">Helpline</span>
                </a>
                <span class="tooltip">Helpline</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-lock'></i>
                    <span class="links_name">Change Password</span>
                </a>
                <span class="tooltip">Change Password</span>
            </li>
            <div style="height: 150px; width: 100%;">

            </div>
            <li class="profile">
                <div class="profile-details">
                    <img src={{asset('images/staff.png')}} alt="profileImg">
                    <div class="name_job">
                        <div class="name">@php
                            echo Auth::user()->fullName;
                        @endphp</div>
                        <div class="job">Staff</div>
                    </div>
                </div>
                <!-- <i class='bx bx-log-out' id="log_out"></i> -->
                <!-- Authentication -->
                <form class="" action="{{ url('../logout') }}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" name="logout">Logout</button>
                </form>
            </li>
        </ul>
    </div>

    <section class="home-section">
        @yield('page-name')
    </section>

    <script src={{ asset('js/admin/sidenavbar.js') }}></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
