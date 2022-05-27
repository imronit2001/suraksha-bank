
@extends('layouts.main')
@section('title', 'Home')
@section('mainSection')

        <!-- HOME SECTION  -->
        <div id="home">

            <!-- CAROUSEL STARTS HERE -->
            <div class="imgcontainer">
                <div class="slideshowcontainer">
                    <!-- <div class="leftArrow" onclick="plusSlides(-1)"> <span class="arrow arrowLeft"></span> </div>
                    <div class="rightArrow" onclick="plusSlides(1)"> <span class="arrow arrowRight"></span> </div> -->
                    <div class="imageholder">
                        <img src="{{asset('images/services.jpg')}}"alt="College Logo">
                    </div>
                    <div class="imageholder">
                        <img src="{{asset('images/security.webp')}}" alt="College">    
                    </div>
                    <div class="imageholder">
                        <img src="{{asset('images/work-1627703_960_720.webp')}}" alt="spark quest">
                    </div>
                    <div class="imageholder">
                        <img src="{{asset('images/strongNetwrok.jpg')}}" alt="CybertronixLogo">
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
                    <button class="btn">offer</button>
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
                    <button class="btn">offer</button>
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
                        <a href="#">
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
                                    <a href="#">
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
                                    <a href="#">
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
                                    <a href="#">
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
                                    <a href="#">
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

            </div>
            <div class="rightNotificationContainer">
                <div class="rightLeftNotificationContainer">

                </div>
                <div class="rightRightNotificationContainer">
                    
                </div>
            </div>
        </div>
        <!-- NOTIFICATION SECTION ENDS HERE  -->

@endsection     