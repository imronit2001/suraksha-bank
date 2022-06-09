<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CAROUSEL JAVASCRIPT LINKING  -->
    <script src="{{url('js/Carousel.js')}}"></script>
    <!-- OWL CAROUSEL CDN LINKING  -->
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css')}}" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS LINKING  -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" media="screen and (max-width:1070px)" href="{{url('css/responsive.css')}}">

    <!-- FAVICON LINKING  -->
    <link rel="shortcut icon" href="{{url('images/favicon.png')}}" type="image/png">
    <!-- FONT AWESOME ICONS LINK  -->
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css')}}" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css')}}" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    <title>@yield('title')</title>

</head>
<body >
    <!-- MAIN CONTENT SECTION  -->
    <div class="contentContainer">
        <nav>
            <label class="logo">
                <img src="images/favicon.png" alt="#logo">
                <div class="names">
                    <h1>Suraksha Bank</h1>
                    <p>Aapki Suraksha, Humari Zimmedari</p>
                </div>
            </label>
    
            <ul>
                <li><a href="{{url('/')}}" class="active">Home</a></li>
                <li><a href="{{url('/AboutUs')}}">About Us</a></li>
                <li><a href="{{url('/Offers')}}" >Offers</a></li>
                <!-- <li><a href="{{url('/Cards')}}">Cards</a></li> -->
                <li><a href="{{url('/OurServices')}}">E-Services</a></li>
                <li><a href="{{url('/CustomerCare')}}">Customer Care</a></li>
                <li><a href="{{url('/AccountOpeningForm')}}">Apply Now</a></li>
                <!-- <button onclick="togglePopup()">Login/Signup</button> -->
                
                <a href="{{url('auth/login')}}" onclick="togglePopup()"><i class="fa-solid fa-user-large"></i></a>
            </ul>
            <label id="icon">
                <i class="fas fa-bars" id="btn"></i>
            </label>
        </nav>

        