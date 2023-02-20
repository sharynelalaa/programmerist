@extends('layouts.app')

<link href="{{ asset('css/contactus.css') }}" rel="stylesheet">
@section('content')

        <!--  CONTACT FORM -->
        <div class="container">
            <h1>CONTACT US</h1>
        </div>
        <div class="statement1">
            <p>
                Please contact us via the following form. We will reply within
                24 hrs.
            </p>
        </div>
        <div class="container">
            <form
                class="row g-3 w-75 mx-auto"
                id="contact-form"
                onsubmit="sendEmail(); reset(); return false;"
            >
                <div class="col-md-6">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Full Name"
                        id="name"
                        required
                    />
                </div>
                <div class="col-md-6">
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="Email"
                        required
                    />
                </div>
                <div class="col-md-6">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Subject"
                        id="subject"
                        required
                    />
                </div>
                <div class="col-md-6">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Phone Number"
                        id="phone"
                        required
                    />
                </div>
                <div class="col-12">
                    <textarea
                        class="form-control"
                        placeholder="Your message"
                        style="height: 150px"
                        id="message"
                        required
                    ></textarea>
                </div>
                <div class="col-12" id="submit">
                    <button type="submit" class="btn btn-dark">Send</button>
                </div>
                <div class="statement2">                    
                    <div class="row soc-icon">
                        <div class="col icon facebook">
                            <div class="tooltip">Facebook</div>
                            <span><i class="bx bxl-facebook"></i></span>
                        </div>
                        <div class="col icon instagram">
                            <div class="tooltip">Instagram</div>
                            <span><i class="bx bxl-instagram"></i></span>
                        </div>
                        <div class="col icon twitter">
                            <div class="tooltip">Twitter</div>
                            <span><i class="bx bxl-twitter"></i></span>
                        </div>
                        <div class="col icon google">
                            <div class="tooltip">Google</div>
                            <span><i class="bx bxl-google"></i></span>
                        </div>
                    </div>
                </div>
            </form>
        </div>



        <img  class = "contact" src="{{ asset('./images/contactus.jpg') }}" alt="" >

