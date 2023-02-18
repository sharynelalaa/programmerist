<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>G'Five Rentals</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css"
            integrity="sha512-b42SanD3pNHoihKwgABd18JUZ2g9j423/frxIP5/gtYgfBz/0nDHGdY/3hi+3JwhSckM3JLklQ/T6tJmV7mZEw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <link href="{{ asset('css/contactus.css') }}" rel="stylesheet">

        
    </head>

    <body>
        <div class="container-fluid" id="header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/')}}">
                        <img src="{{ asset('./images/G5-Logo-B-White-on-Black-Border-V1.png') }}" alt="Logo" width="200" height="100"
                            class="d-inline-block align-text-top">
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                    >

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/carmodel')}}">Vehicles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/terms')}}">Terms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/aboutus') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contactus') }}">Contact Us</a>
                        </li>
                    </ul>
                  
                  
                        <form class="d-flex mx-auto">
                            <button
                                type="button"
                                class="btn1 btn-outline-warning btn-lg"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                            >
                                Login
                            </button>
                            <div
                                class="modal fade"
                                id="exampleModal"
                                tabindex="-1"
                                aria-labelledby="exampleModalLabel"
                                aria-hidden="true"
                            >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1
                                                class="modal-title fs-5"
                                                id="exampleModalLabel"
                                            >
                                                Members can access discounts,
                                                points and special features.
                                            </h1>
                                            <button
                                                type="button"
                                                class="btn-close btn-light"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                            ></button>
                                        </div>
                                        <div class="modal-body px-5">
                                            <form>
                                                <div class="mb-3 w-100">
                                                    <input
                                                        type="email"
                                                        class="form-control"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Email"
                                                    />
                                                </div>
                                                <div class="mb-3 w-100">
                                                    <input
                                                        type="password"
                                                        class="form-control my-3"
                                                        id="exampleInputPassword1"
                                                        placeholder="Password"
                                                    />
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <input
                                                        type="checkbox"
                                                        class="form-check-input"
                                                        id="exampleCheck1"
                                                        checked
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="exampleCheck1"
                                                        >Keep me signed
                                                        in</label
                                                    >
                                                </div>
                                                <p class="w-100">
                                                    Selecting this checkbox will
                                                    keep you signed into your
                                                    account on this device until
                                                    you sign out. Do not select
                                                    this on shared devices.
                                                </p>
                                                <button
                                                    type="submit"
                                                    class="btn btn-dark w-75 mx-5"
                                                >
                                                    Sign in
                                                </button>
                                                <div class="col-9 mx-auto">
                                                    <p class="text-center">
                                                        <a
                                                            href="#"
                                                            class="text-decoration-none"
                                                            style="color: blue"
                                                            >Forgot password?</a
                                                        >
                                                    </p>
                                                </div>
                                                <p>
                                                    Don't have an account?
                                                    <a
                                                        href="signup.html"
                                                        class="text-decoration-none"
                                                        style="color: blue"
                                                        >Create one.</a
                                                    >
                                                </p>
                                                <p>or continue with</p>
                                                <div class="row mx-5">
                                                    <div
                                                        class="icon facebook col-1"
                                                    >
                                                        <div class="tooltip">
                                                            Facebook
                                                        </div>
                                                        <span
                                                            ><i
                                                                class="bi bi-facebook"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <div
                                                        class="icon instagram col-2"
                                                    >
                                                        <div class="tooltip">
                                                            Instagram
                                                        </div>
                                                        <span
                                                            ><i
                                                                class="bi bi-instagram"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <div
                                                        class="icon twitter col-3"
                                                    >
                                                        <div class="tooltip">
                                                            Twitter
                                                        </div>
                                                        <span
                                                            ><i
                                                                class="bi bi-twitter"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                    <div
                                                        class="icon google col-4"
                                                    >
                                                        <div class="tooltip">
                                                            Google
                                                        </div>
                                                        <span
                                                            ><i
                                                                class="bi bi-google"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <h5>
                                                <a
                                                    href="underconstruction.html"
                                                    class="text-decoration-none justify-left"
                                                    >Feedback</a
                                                >
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

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


        <footer class="footer" id="foorear">
            <div class="container">
                <footer class="py-5">
                    <div class="row">
    
                        <div class="col-6 col-md-2 mb-3">
                            <h5>Rental Car Types</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <a href="#foorear') }}" class="nav-link p-0 ">Luxury Car
                                        Rental</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#foorear" class="nav-link p-0 ">Pickup Truck
                                        Rental</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#foorear" class="nav-link p-0 ">Van Rental</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#foorear" class="nav-link p-0 ">SUV Rental</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#foorear" class="nav-link p-0 ">Rental Car
                                        Sizes — Sedans</a>
                                </li>
                            </ul>
                        </div>
                        
    
    
                        <div class="col-md-5 offset-md-1 mb-3" style="margin-left: 33%;">
                            <form>
                                <h5>Subscribe to our newsletter</h5>
                                <p>
                                    Monthly digest of what's new and exciting
                                    from us.
                                </p>
                                    
                                    <br />
                                <div class="wrapper">
                                    <a class="button" href="#foorear">
                                        <div class="icon"><i class="fa fa-facebook-f"
                                                style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                                        <span style="color: #4400ff">Facebook</span>
                                    </a>
                                    <a class="button" href="#foorear">
                                        <div class="icon"><i class="fa fa-instagram"
                                                style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                                        <span style="color: #833AB4">Instagram</span>
                                    </a>
                                    <a class="button" href="#foorear">
                                        <div class="icon"><i class="fa fa-twitter"
                                                style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                                        <span style="color: #1DA1F2">Twitter</span>
                                    </a>
                                    <a class="button" href="#foorer">
                                        <div class="icon"><i class="fa fa-youtube-play"
                                                style=" font-size:34px;color:rgb(255, 255, 255)"></i></div>
                                        <span style="color: #fc0303">YouTube</span>
                                    </a>
                                    <a class="button" href="#foorear">
                                        <div class="icon">
                                            <i class="fa fa-google" style="font-size:40px;color:rgb(255, 255, 255)"></i>
                                        </div>
                                        <span style="color: #176af0">Google</span>
                                    </a>
                                </div>
    
                            </form>
    
                        </div>
                        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                            <p>© 2022 G' Five | Company, Inc. All rights reserved.</p>
                            <ul class="list-unstyled d-flex">
                                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                            <use xlink:href="#twitter"></use>
                                        </svg></a></li>
                                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                            <use xlink:href="#instagram"></use>
                                        </svg></a></li>
                                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                            <use xlink:href="#facebook"></use>
                                        </svg></a></li>
                            </ul>
                        </div>
                    </div>
    
    
                </footer>
            </div>
        </footer>

        

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

        <script>
            window.onscroll = function () {
                var header = document.getElementById("header");
                if (window.pageYOffset > 0) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
            };
        </script>

        <script src="https://smtpjs.com/v3/smtp.js"></script>

  
    </body>
</html>
