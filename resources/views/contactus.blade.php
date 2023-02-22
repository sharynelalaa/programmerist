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
                    <button type="submit" class="btn btn-dark" id="btn">Send</button>
                </div>
                
            </form>
        </div>



        <img  class = "contact" src="{{ asset('./images/contactus.jpg') }}" alt="" >

