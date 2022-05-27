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
    <script src="{{url('https://code.jquery.com/jquery-3.4.1.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('show');
            })
        })
    </script>
    
    <title>@yield('title')</title>

</head>
<body id="page">
   <!-- PRELOADER  -->
    <!-- <div class="preLoader">
        <div class="upper">
            <div class="spinner-block">
               <div class="boxes">
                   <div></div>
                   <div></div>
                   <div></div>
                   <div></div>
                   <div></div>
                   <div></div>
                   <div></div>
                   <div></div>
               </div>
            </div>
        </div>
        <div class="down"></div>
    </div> -->
    <!-- PRELOADER ENDS HERE  -->

    <!-- MAIN CONTENT SECTION  -->
    <div class="contentContainer">
        <nav>
            <label class="logo">
            <!-- <img src="images/favicon.png" alt="logo">
                <h1>Suraksha Bank</h1> -->
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
                <li><a href="{{url('/Cards')}}">Cards</a></li>
                <li><a href="{{url('/OurServices')}}">E-Services</a></li>
                <li><a href="{{url('/CustomerCare')}}">Customer Care</a></li>
                <li><a href="{{url('/AccountOpeningForm')}}">Apply Now</a></li>
                <!-- <button onclick="togglePopup()">Login/Signup</button> -->
                
                <a href="#" onclick="togglePopup()"><i class="fa-solid fa-user-large"></i></a>
            </ul>
            <label id="icon">
                <i class="fas fa-bars" id="btn"></i>
            </label>
        </nav>

        <!-- NAVBAR SECTION ENDS HERE  -->
        <div id="login">
            <div class="popup" id="popup-1">
                <div class="overlay"></div>
                <div class="content">
                    <div class="close-btn" onclick="togglePopup()">&times;</div>   
                    <form action="#">
                        <div class="login-container">
                            <h2>Login</h2>
                            <div class="row100">
                                <div class="col">
                                    <div class="inputBox">
                                        <img src="images/icons/user.png" alt="">
                                        <input type="text" required>
                                        <span class="credential">Username</span>
                                        <span class="line"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inputBox">
                                        <img src="images/icons/lock.png" alt="">
                                        <input type="password" id="password" required>
                                        <span class="credential">Password</span>
                                        <span class="line"></span>
                                    </div>
                                </div>
                            </div>
                            <div id="password-toggle" onclick="showHide();"></div>
                            <input type="Submit" name="" id="" value="Login">
                            <div class="forget">
                                <a href="#">Forget Password</a><br>
                                <!-- <p>Don't have an account ?&nbsp;<a href="registration.html" target="_blank" rel="noopener noreferrer">Signup</a></p> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- LOGIN SECTION ENDS HERE  -->