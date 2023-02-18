<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/aboutus.css')}}"/>
    <title>G'Five Rentals</title>
</head>

<body>

    <img class="aboutusheadpic" src="{{ asset('./images/aboutushead.jpg') }}">

    <div class="container-fluid" id="header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ url('/')}}">
                            <img src="{{ asset('./images/G5-Logo-B-White-on-Black-Border-V1.png') }}" alt="Logo" width="200" height="100"
                                class="d-inline-block align-text-top">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                                <button type="button" class="btn1 btn-outline-warning btn-lg" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Login
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Members can access
                                                    discounts,
                                                    points and special features.</h1>
                                                <button type="button" class="btn-close btn-light"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body px-5">
                                                <form>
                                                    <div class="mb-3 w-100">
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="Email">
                                                    </div>
                                                    <div class="mb-3 w-100">
                                                        <input type="password" class="form-control my-3"
                                                            id="exampleInputPassword1" placeholder="Password">
                                                    </div>
                                                    <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="exampleCheck1" checked>
                                                        <label class="form-check-label" for="exampleCheck1">Keep me
                                                            signed in</label>
                                                    </div>
                                                    <p class="w-100">Selecting this checkbox will keep you signed into
                                                        your account on this device until
                                                        you
                                                        sign out. Do not select this on shared devices.</p>
                                                    <button type="submit" class="btn btn-dark w-75 mx-5">Sign
                                                        in</button>
                                                    <div class="col-9 mx-auto">
                                                        <p class="text-center"><a href="#" class="text-decoration-none"
                                                                style="color: blue;">Forgot password?</a></p>
                                                    </div>
                                                    <p>Don't have an account? <a href="{{ url('/signup') }}"
                                                            class="text-decoration-none" style="color: blue;">Create
                                                            one.</a></p>
                                                    <p>or continue with</p>

                                                    <div class="row mx-5">
                                                        <div type="button" href="{{ url('#') }}" class="icon facebook col-1">
                                                            <span><i class="bi bi-facebook"></i></span>
                                                        </div>
                                                        <div type="button" href="{{ url('#') }}" class="icon instagram col-2">
                                                            <span><i class="bi bi-instagram"></i></span>
                                                        </div>
                                                        <div type="button" href="{{ url('#') }}" class="icon twitter col-3">
                                                            <span><i class="bi bi-twitter"></i></span>
                                                        </div>
                                                        <div type="button" href="{{ url('#') }}" class="icon youtube col-3">
                                                            <span><i class="bi bi-youtube"></i></span>
                                                        </div>
                                                        <div type="button" href="{{ url('#') }}" class="icon google col-4">
                                                            <span><i class="bi bi-google"></i></span>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <h5><a href="{{ url('/underconstruction') }}"
                                                        class="text-decoration-none justify-left">Feedback</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                </nav>
            </div>

    <div class="container">
        <div class="header">
            <h1>ABOUT US</h1>
        </div>
        <div>
            <div class="article">
                <p>Josh Pamara Rent-A-Car Services was a family business initially registered as a single proprietorship
                    in 2005. It transformed to G'Five Rentals in 2016 due to the rapidly growing demands of our clients
                    and the increasing competitiveness in the industry. We partnered with investors to secure more
                    resources needed in maintaining the quality transport service we have been providing individual and
                    corporate clients for the past decade. We, at G'Five Rentals, always innovate and adopt best
                    practices in the car rental business to better serve our esteemed customers. We value your time and
                    satisfaction. Our job is to ensure that daily commute is the least of your concerns. G'Five Rentals
                    makes available to you a fleet of topnotch vehicles without having to worry about procurement,
                    maintenance, and insurance costs. All you have to do is sit back, relax and enjoy the ride. At
                    G'Five Rentals, everyone can always expect to get great value leasing packages that comes with
                    reliable service. This has been our way of business through the years, making us a leader in the car
                    rental industry. We strive to be on top and prove that <strong>wherever it is, we know how to get
                        you there
                        safely.</strong></p>
                <img src="{{ asset('./images/aboutus1.JPG') }}" class="aboutus1">
            </div>
            <div class="article2">
                <div class="bodyicon" id="confidentiality">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                        class="bi bi-incognito" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="m4.736 1.968-.892 3.269-.014.058C2.113 5.568 1 6.006 1 6.5 1 7.328 4.134 8 8 8s7-.672 7-1.5c0-.494-1.113-.932-2.83-1.205a1.032 1.032 0 0 0-.014-.058l-.892-3.27c-.146-.533-.698-.849-1.239-.734C9.411 1.363 8.62 1.5 8 1.5c-.62 0-1.411-.136-2.025-.267-.541-.115-1.093.2-1.239.735Zm.015 3.867a.25.25 0 0 1 .274-.224c.9.092 1.91.143 2.975.143a29.58 29.58 0 0 0 2.975-.143.25.25 0 0 1 .05.498c-.918.093-1.944.145-3.025.145s-2.107-.052-3.025-.145a.25.25 0 0 1-.224-.274ZM3.5 10h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5Zm-1.5.5c0-.175.03-.344.085-.5H2a.5.5 0 0 1 0-1h3.5a1.5 1.5 0 0 1 1.488 1.312 3.5 3.5 0 0 1 2.024 0A1.5 1.5 0 0 1 10.5 9H14a.5.5 0 0 1 0 1h-.085c.055.156.085.325.085.5v1a2.5 2.5 0 0 1-5 0v-.14l-.21-.07a2.5 2.5 0 0 0-1.58 0l-.21.07v.14a2.5 2.5 0 0 1-5 0v-1Zm8.5-.5h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5Z" />
                    </svg>
                    <p>We put high value to integrity in all our dealings. Every potential, current, and past client,
                        enjoy confidentiality with regards to all personal information given to Voyg in the course of
                        any business transaction.</p>
                </div>
                <div class="bodyicon" id="contracts">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                        class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                        <path
                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                    </svg>
                    <p>Our contract contains pertinent information regarding costs, short & long term lease terms,
                        timescales and deliverables. This serves to protect both Voyg and the client from any possible
                        inconveniences that may arise from generic/non-detailed contracts.</p>
                </div>
                <div class="bodyicon" id="payment">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                        class="bi bi-credit-card-fill" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z" />
                    </svg>
                    <p>We strongly exercise a "No Hidden Charges" payment policy. Voyg always upholds the payment terms
                        agreed upon with the client.</p>
                </div>
                <div class="bodyicon" id="conduct">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                        class="bi bi-person-check-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <p>We practice due diligence in reviewing every recommendation sent out to our clients to ensure
                        that options we provide are best for their needs.</p>
                </div>
                <div class="bodyicon" id="quality">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                        class="bi bi-clipboard-check-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z" />
                        <path
                            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708Z" />
                    </svg>
                    <p>We regularly assess the performance of our company to ensure that we maintain the superior
                        quality transport service we promise to our customers.</p>
                </div>
                <div class="bodyicon" id="rates">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                        class="bi bi-wallet2" viewBox="0 0 16 16">
                        <path
                            d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                    </svg>
                    <p>We assess your transportation requirements and create the appropriate lease package to ensure
                        that your budget goes an extra mile.</p>
                </div>
                <div class="bodyicon" id="fuel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                        class="bi bi-fuel-pump-fill" viewBox="0 0 16 16">
                        <path
                            d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1c.564 0 1.034.11 1.412.336.383.228.634.551.794.907.295.655.294 1.465.294 2.081V7.5a.5.5 0 0 1-.5.5H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V2Zm2.5 0a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5h-5Z" />
                    </svg>
                    <p>We make sure that efficient fuel consumption is achieved by doing regular vehicle maintenance
                        service and by instilling proper driving habits to our drivers.</p>
                </div>
                <div class="bodyicon" id="fuel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                        class="bi bi-umbrella" viewBox="0 0 16 16">
                        <path
                            d="M8 0a.5.5 0 0 1 .5.5v.514C12.625 1.238 16 4.22 16 8c0 0 0 .5-.5.5-.149 0-.352-.145-.352-.145l-.004-.004-.025-.023a3.484 3.484 0 0 0-.555-.394A3.166 3.166 0 0 0 13 7.5c-.638 0-1.178.213-1.564.434a3.484 3.484 0 0 0-.555.394l-.025.023-.003.003s-.204.146-.353.146-.352-.145-.352-.145l-.004-.004-.025-.023a3.484 3.484 0 0 0-.555-.394 3.3 3.3 0 0 0-1.064-.39V13.5H8h.5v.039l-.005.083a2.958 2.958 0 0 1-.298 1.102 2.257 2.257 0 0 1-.763.88C7.06 15.851 6.587 16 6 16s-1.061-.148-1.434-.396a2.255 2.255 0 0 1-.763-.88 2.958 2.958 0 0 1-.302-1.185v-.025l-.001-.009v-.003s0-.002.5-.002h-.5V13a.5.5 0 0 1 1 0v.506l.003.044a1.958 1.958 0 0 0 .195.726c.095.191.23.367.423.495.19.127.466.229.879.229s.689-.102.879-.229c.193-.128.328-.304.424-.495a1.958 1.958 0 0 0 .197-.77V7.544a3.3 3.3 0 0 0-1.064.39 3.482 3.482 0 0 0-.58.417l-.004.004S5.65 8.5 5.5 8.5c-.149 0-.352-.145-.352-.145l-.004-.004a3.482 3.482 0 0 0-.58-.417A3.166 3.166 0 0 0 3 7.5c-.638 0-1.177.213-1.564.434a3.482 3.482 0 0 0-.58.417l-.004.004S.65 8.5.5 8.5C0 8.5 0 8 0 8c0-3.78 3.375-6.762 7.5-6.986V.5A.5.5 0 0 1 8 0zM6.577 2.123c-2.833.5-4.99 2.458-5.474 4.854A4.124 4.124 0 0 1 3 6.5c.806 0 1.48.25 1.962.511a9.706 9.706 0 0 1 .344-2.358c.242-.868.64-1.765 1.271-2.53zm-.615 4.93A4.16 4.16 0 0 1 8 6.5a4.16 4.16 0 0 1 2.038.553 8.688 8.688 0 0 0-.307-2.13C9.434 3.858 8.898 2.83 8 2.117c-.898.712-1.434 1.74-1.731 2.804a8.687 8.687 0 0 0-.307 2.131zm3.46-4.93c.631.765 1.03 1.662 1.272 2.53.233.833.328 1.66.344 2.358A4.14 4.14 0 0 1 13 6.5c.77 0 1.42.23 1.897.477-.484-2.396-2.641-4.355-5.474-4.854z" />
                    </svg>
                    <p>Flexible rental period. Whether you need daily, monthly or just a one way hire, choose a length
                        to suit your needs.</p>
                </div>
                <div class="bodyicon" id="fuel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                        class="bi bi-person-hearts" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566ZM9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z" />
                    </svg>
                    <p>Become a Privilege member to unlock rewards. Save every time you rent with our Member's Discount.
                    </p>
                </div>

            </div>

        </div>

    </div>

    <!-- =================================================== Footer Start =============================================================== -->

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

    <!-- =================================================== Footer End =============================================================== -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
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

</body>

</html>