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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    {{-- Css  --}}
    <link rel="stylesheet" href={{asset('css/admin/style.css')}}>
    <link rel="stylesheet" href={{asset('css/admin/sidenavbar.css')}}>
    {{-- Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- Box Icon CDN  --}}
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
          <i class='bx bxs-bank icon'></i>
          <div class="logo_name">Suraksha Bank</div>
          <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
          <li >
            <a href="{{route('admin-dashboard')}}">
              <i class='bx bxs-home'></i>
              <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
          </li>
          {{-- <li>
            <a href="{{route('admin-bank-balance')}}">
              <i class='bx bx-wallet'></i>
              <span class="links_name">Bank Balance</span>
            </a>
            <span class="tooltip">Bank Balance</span>
          </li> --}}

          <li>
            <a href="{{route('admin-add-staff')}}">
              <i class='bx bxs-user-plus'></i>
              <span class="links_name">Add Staff</span>
            </a>
            <span class="tooltip">Add Staff</span>
          </li>
          <li>
            <a href="{{route('admin-manage-staff')}}">
              <i class='bx bxs-user-account'></i>
              <span class="links_name">Manage Staffs</span>
            </a>
            <span class="tooltip">Manage Staffs</span>
          </li>
          <li>
            <a href="{{route('admin-add-manager')}}">
              <i class='bx bx-user-plus'></i>
              <span class="links_name">Add Manager</span>
            </a>
            <span class="tooltip">Add Manager</span>
          </li>
          <li>
            <a href="{{route('admin-managers')}}">
              <i class='bx bx-user-plus'></i>
              <span class="links_name">Managers</span>
            </a>
            <span class="tooltip">Managers</span>
          </li>
          {{-- <li>
            <a href="{{route('admin-manage-customer')}}">
              <i class='bx bxs-user-detail'></i>
              <span class="links_name">Manage Customers</span>
            </a>
            <span class="tooltip">Manage Customers</span>
         </li> --}}
        {{--  <li>
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
          </li>--}}
          <li>
            <a href="{{route('admin-branch-table')}}">
              <i class='bx bx-user-circle'></i>
              <span class="links_name">Branch table </span>
            </a>
            <span class="tooltip">Branch table </span>
          </li>
          <li>
            <a href="{{route('admin-branch-change')}}">
              <i class='bx bx-git-branch'></i>
              <span class="links_name">Branch change</span>
            </a>
            <span class="tooltip">Branch change</span>
          </li>
          {{-- <li>
            <a href="#">
              <i class='bx bx-credit-card'></i>
              <span class="links_name">Credit Card a/c</span>
            </a>
            <span class="tooltip">Credit Card a/c</span>
          </li> --}}
          {{-- <li>
            <a href="{{route('admin-fixed-deposit')}}">
              <i class='bx bxs-wallet-alt'></i>
              <span class="links_name">Fixed Deposits</span>
            </a>
            <span class="tooltip">Fixed Deposits</span>
          </li> --}}
          <li>
            <a href="{{route('admin-termsCondition')}}" target="_blank">
              <i class='bx bxs-copy-alt'></i>
              <span class="links_name">Terms & Conditions</span>
            </a>
            <span class="tooltip">Terms & Conditions</span>
          </li>
          <li>
            <a href="{{route('admin-helpline')}}">
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
                <div class="name">
                    @php
                            echo Auth::user()->fullName;
                        @endphp
                </div>
                <div class="job">Bank Manager</div>
              </div>
            </div>
            <!-- <i class='bx bx-log-out' id="log_out"></i> -->
            <!-- Authentication -->
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

    <script src={{asset('js/admin/sidenavbar.js')}}></script>
    <script src={{asset('js/admin/form.js')}}></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
