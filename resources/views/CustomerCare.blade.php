@extends('layouts.main')
@section('title', 'Customer Care')
@section('mainSection')
    <div class="customerCare">
        <section id="contact">
            <div class="social">

                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>

            </div>
            <div class="contact-box">
                <div class="c-heading">
                    <h1>Get In Touch</h1>
                    <p>Email Us Regarding Issues or Queries</p>
                </div>
                <div class="c-inputs">
                    <form action="" method="POST">
                        @csrf
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required />
                        <input type="email" class="form-control" id="email" name="email" placeholder="Example@gmail.com" required/>
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your Mobile Number" required/>
                        <textarea name="issue" class="form-control" id="issue" name="issue" placeholder="Write your Issues" required></textarea>
                        <button type="submit">SEND</button>
                    </form>
                    @if (session()->has('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7351.180558746998!2d88.38173!3d22.891589!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe94a8f21ca53259a!2sTechno%20India%20Hooghly!5e0!3m2!1sen!2sin!4v1651481512703!5m2!1sen!2sin"
             width="650" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
    </div>
@endsection
