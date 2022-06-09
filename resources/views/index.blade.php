
@extends('layouts.main')
@section('title', 'Home')
@section('mainSection')

@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        <!-- HOME SECTION  -->
        <div id="home">

            <!-- CAROUSEL STARTS HERE -->
            <div class="imgcontainer">
                <div class="slideshowcontainer">
                    <!-- <div class="leftArrow" onclick="plusSlides(-1)"> <span class="arrow arrowLeft"></span> </div>
                    <div class="rightArrow" onclick="plusSlides(1)"> <span class="arrow arrowRight"></span> </div> -->
                    <div class="imageholder">
                        <div class="carouselImage">
                            <img src="{{asset('images/1.webp')}}"alt="">
                        </div>
                        <div class="carouselHeading">
                            <h1>Welcome to Suraksha Bank</h1>
                        </div>
                        
                    </div>
                    <div class="imageholder">
                    <div class="carouselImage">
                            <img src="{{asset('images/2.webp')}}"alt="">
                        </div>
                        <div class="carouselHeading">
                            <h1>We provide hustle free and less time consuming process for your banking.</h1>
                        </div>   
                    </div>
                    <div class="imageholder">
                    <div class="carouselImage">
                            <img src="{{asset('images/3.webp')}}"alt="">
                        </div>
                        <div class="carouselHeading">
                            <h1>We are lass with high security system.</h1>
                        </div>
                    </div>
                    <div class="imageholder">
                    <div class="carouselImage">
                            <img src="{{asset('images/4.webp')}}"alt="">
                        </div>
                        <div class="carouselHeading">
                            <h1>We are Introducing Digital Banking. Now, no need to waste your time in lines. </h1>
                        </div>

                    </div>
                    <div class="imageholder">
                    <div class="carouselImage">
                            <img src="{{asset('images/5.jpg')}}"alt="">
                        </div>
                        <div class="carouselHeading">
                            <h1>We provide a vaste network for better User Experience.</h1>
                        </div>
                    </div>
                </div>
                <div id="dotsContainer"></div>
            </div>
            <script src="{{url('js/Carousel.js')}}"></script>
        </div>
        <!-- CAROUSEL ENDS HERE  -->

        <!-- LOANS SECTION STARTS HERE  -->
        <div id="loans">
            <div class="loansElementContainer">

                <div class="loanContainer">
                    <div class="loanDetails">

                        <div class="loanIcon">
                            <img src="images/icons/home.png" alt="">
                        </div>
                        <div class="loanHeading">
                            <h3>Home Loan</h3>
                            <p><span>6.50</span>% p.a</p>
                        </div>
                    </div>
                    <a href="{{url('/Offers/')}}"><button class="btn">offer</button></a>
                </div>
                <div class="loanContainer">
                    <div class="loanDetails">

                        <div class="loanIcon">
                            <img src="images/icons/car.png" alt="">
                        </div>
                        <div class="loanHeading">
                            <h3>Car Loan</h3>
                            <p><span>6.85</span>% p.a</p>
                        </div>
                    </div>
                    <a href="{{url('/Offers/')}}"><button class="btn">offer</button></a>
                </div>
                <div class="loanContainer loanContainer1">
                    <div class="loanIcon">
                        <img src="images/icons/education.png" alt="">
                    </div>
                    <div class="loanHeading">
                        <h3>Education Loan</h3>
                        <p><span>6.85</span>% p.a</p>
                    </div>
                </div>
                <div class="loanContainer loanContainer1">
                    <div class="loanIcon">
                        <img src="images/icons/personal.png" alt="">
                    </div>
                    <div class="loanHeading">
                        <h3>Personal Loan</h3>
                        <p><span>10.35</span>% p.a</p>
                    </div>
                </div>
                <div class="loanContainer loanContainer1">
                    <div class="loanIcon">
                        <img src="images/icons/deposit.png" alt="">
                    </div>
                    <div class="loanHeading">
                        <h3>Check <br> Deposit <br> Rates</h3>
                    </div>
                </div>
            </div>
            <div class="btnKnowMore">
                <ul>
                    <li>
                        <a href="{{url('/Offers/')}}">
                           <p>Know More</p>
                            <img src="images/icons/play.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- LOANS SECTION ENDS HERE  -->

        <!-- MID HEADING SECTION STARTS HERE  -->
        <div class="midHeading">
            <h2>We're here to help you when you need financial support</h2>
            <p>Suraksha Bank launches <a href="#">COVID Personal Loan</a> & COVID Pensioner Loan (conditions apply). Please contact your nearest branch. <span>NEW</span></p>
        </div>
        <!-- MID HEADING ENDS HERE  -->

        <!-- OWL CAROUSEL SECTION STARTS HERE  -->
        <div id="owlCarousel">

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="owlCarouselBox">
                        <div class="owlCarouselIcon">
                            <img src="images/icons/credit-card-icon.png" alt="#creditCard">
                            <h2>Credit Cards</h2>
                        </div>
                        <div class="owlCarouselHeading">
                            <p>Amazing Deals and Rewards</p>
                        </div>
                        <div class="btnKnowMore">
                            <ul>
                                <li>
                                    <a href="{{url('/Offers/')}}">
                                       <p>Know More</p>
                                        <img src="images/icons/next.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owlCarouselBox">
                        <div class="owlCarouselIcon">
                            <img src="Images/icons/loans-icon.png" alt="#loans">
                            <h2>Loans</h2>
                        </div>
                        <div class="owlCarouselHeading">
                            <p>Wide range of financial products <br> at low interest rates</p>
                        </div>
                        <div class="btnKnowMore">
                            <ul>
                                <li>
                                    <a href="{{url('/Offers/')}}">
                                       <p>Know More</p>
                                        <img src="images/icons/next.png" alt="">

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owlCarouselBox">
                        <div class="owlCarouselIcon">
                            <img src="images/icons/insurance-icon.png" alt="">
                            <h2>Secure Fund Transfer</h2>
                        </div>
                        <div class="owlCarouselHeading">
                            <p>Wide coverage & affordable <br>premium services</p>                            
                        </div>
                        <div class="btnKnowMore">
                            <ul>
                                <li>
                                    <a href="{{url('/Offers/')}}">
                                       <p>Know More</p>
                                        <img src="images/icons/next.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owlCarouselBox">
                        <div class="owlCarouselIcon">
                            <img src="images/icons/nri-deposit-icon.png" alt="">
                            <h2>Fixed Deposits</h2>
                        </div>
                        <div class="owlCarouselHeading">
                            <p> Taking our Relationship beyond <br> Borders</p>                  
                        </div>
                        <div class="btnKnowMore">
                            <ul>
                                <li>
                                    <a href="{{url('/Offers/')}}">
                                       <p>Know More</p>
                                        <img src="images/icons/next.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- OWL CAROUSEL SECTION ENDS HERE  -->

        <!-- NOTIFICATION SECTION STARTS HERE  -->
        <div id="notificationContainer">
            <div class="leftNotificationContainer">
                <h2>Notification</h2>
                <div class="Scroller">
                <marquee width="100%" direction="left" height="30px">
                        Suraksha Bank Welcomes to the Bank Website, Enjoy the Timeless and Hustlefree Process. Thank You for being the part of the Bank.
                    </marquee>
                    <marquee width="100%" direction="left" height="30px">
                        Suraksha Bank Welcomes to the Bank Website, Enjoy the Timeless and Hustlefree Process. Thank You for being the part of the Bank.
                    </marquee>
                </div>
            </div>
            <div class="rightNotificationContainer">
                <h2>Updates</h2>
                <div class="Scroller">
                    <marquee width="100%" direction="left" height="30px">
                        Suraksha Bank Welcomes to the Bank Website, Enjoy the Timeless and Hustlefree Process. Thank You for being the part of the Bank.
                    </marquee>
                    <marquee width="100%" direction="left" height="30px">
                        Suraksha Bank Welcomes to the Bank Website, Enjoy the Timeless and Hustlefree Process. Thank You for being the part of the Bank.
                    </marquee>
                </div>
            </div>
        </div>
        <!-- NOTIFICATION SECTION ENDS HERE  -->

@endsection     