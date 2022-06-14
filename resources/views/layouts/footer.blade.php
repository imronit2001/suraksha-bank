 <!-- FOOTER SECTION  -->
 <footer class="footer">
            <div class="upperFooter">
                <div class="leftContainerFooter">
                    <div class="footerHeadings">
                        <h1>Contact Us</h1>
                        <p class="gen">General Enquiries</p>
                        <p>Mail Us : <a href="mailto:atulgiri21dec@gmail.com">atulgiri21dec@gmail.com</a></p>
                        <p class="location">Locate Us : <br>
                            <a><i class="fa-solid fa-magnifying-glass"></i>Search Branch or ATM </a>
                            <a><i class="fa-solid fa-magnifying-glass"></i>Search Aadhar Seva kendra</a><br>
                            <p>
                                <a><i class="fa-solid fa-location-dot"></i>Find an ATM or a Branch</a>
                            </p>
                        </p>
                    </div>
                </div>
                <div class="rightConatainerFooterLinks">
                    <p>Find us on <br><br>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram-square"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube-square"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </p>
                </div>
            </div>
            <div class="lowerFooter">
                <div class="copy">
                    <p>&copy; Suraksha Bank </p><p> All rights reserved | Techno India Hooghly Campus</p>
                </div>
                <div class="design&Develope">
                    <p>Designed & Developed by Atul Kumar Giri, Gaurav Jha, Gulafshan Parwin, Mohit Gupta, Ronit Singh under <strong>Major Project of BCA (2019-2022) </strong> </p>
                </div>
            </div>
        </footer>
        <!-- FOOTER SECTION ENDS HERE -->
    </div>
    <!-- MAIN CONTENT ENDS HERE  -->



<!-- JAVASCRIPT STARTS HERE  -->

<!-- BUTTON ACTIVE JAVASCRIPT  -->
<script type="text/javascript">
    $(document).on('click', 'li a', function(){
      $(this).addClass('active').siblings().removeClass('active');
    });
</script>


<!-- PASSWORD SHOW/HIDE  -->
<script type="text/javascript">
    const password = document.getElementById('password');
    const toggle = document.getElementById('password-toggle');

    function showHide(){
        if(password.type === 'password'){
            password.setAttribute('type', 'text');
            toggle.classList.add('hide');
        }else{
            password.setAttribute('type', 'password');
            toggle.classList.remove('hide');
        }
    }
</script>

<!-- OWL CAROUSEL JAVASCRIPT LINKING  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    autoplayTimeout: 1500,
    stagePadding: 50,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>
</body>
</html>
