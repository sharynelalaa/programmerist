<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" integrity="sha512-f28cvdA4Bq3dC9X9wNmSx21rjWI+5piIW/uoc2LuQ67asKxfQjUow2MkcCNcfJiaLrHcGbed1wzYe3dlY4w9gA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link href="<?php echo e(asset('css/carmodel.css')); ?>" rel="stylesheet" />
  <title>G'Five Rentals</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container-fluid" id="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
          <img src="<?php echo e(asset('./images/G5-Logo-B-White-on-Black-Border-V1.png')); ?>" alt="Logo" width="200" height="100" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?php echo e(url('/')); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?php echo e(url('/carmodel')); ?>">Vehicles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/terms')); ?>">Terms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/aboutus')); ?>">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/contactus')); ?>">Contact Us</a>
            </li>
          </ul>
          <form class="d-flex mx-auto">
            <button type="button" class="btn1 btn-outline-warning btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Login
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Members can access
                      discounts,
                      points and special features.</h1>
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body px-5">
                    <form>
                      <div class="mb-3 w-100">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                      </div>
                      <div class="mb-3 w-100">
                        <input type="password" class="form-control my-3" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
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
                        <p class="text-center"><a href="#" class="text-decoration-none" style="color: blue;">Forgot password?</a></p>
                      </div>
                      <p>Don't have an account? <a href="<?php echo e(url('/signup')); ?>" class="text-decoration-none" style="color: blue;">Create
                          one.</a></p>
                      <p>or continue with</p>

                      <div class="row mx-5">
                        <div type="button" href="<?php echo e(url('#')); ?>" class="icon facebook col-1">
                          <span><i class="bi bi-facebook"></i></span>
                        </div>
                        <div type="button" href="<?php echo e(url('#')); ?>" class="icon instagram col-2">
                          <span><i class="bi bi-instagram"></i></span>
                        </div>
                        <div type="button" href="<?php echo e(url('#')); ?>" class="icon twitter col-3">
                          <span><i class="bi bi-twitter"></i></span>
                        </div>
                        <div type="button" href="<?php echo e(url('#')); ?>" class="icon youtube col-3">
                          <span><i class="bi bi-youtube"></i></span>
                        </div>
                        <div type="button" href="<?php echo e(url('#')); ?>" class="icon google col-4">
                          <span><i class="bi bi-google"></i></span>
                        </div>

                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <h5><a href="<?php echo e(url('/underconstruction')); ?>" class="text-decoration-none justify-left">Feedback</a></h5>
                  </div>
                </div>
              </div>
            </div>

          </form>

        </div>
    </nav>
  </div>
  <!-- TOP -->
  <div class="banner-hero">
    <div class="banner-content-cont">
      <h1>Available Cars For You</h1>
    </div>
  </div>
  <!-- TOP -->
  <!-- 1 -->
  <div class="content-body-cont">
    <div class="accordion" id="accordionExample">
      <!-- 1 -->

      <!-- 2 -->
      <div class="navigation">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h5> K I A </h5>
          </button>
        </h2>
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h5>T O Y O T A</h5>
          </button>
        </h2>
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h5>H O N D A</h5>
          </button>
        </h2>
      </div>
      <!-- 2 -->

      <!-- KIA -->
      <div class="accordion-item">
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div id="myCarousel" class="owl-carousel owl-theme">
              <!--  -->
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/Kiasred.png')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">KIA SOLUTO 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SEDAN</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/KIAGOLDST4.jpg')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title-K1">KIA STINGER 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SEDAN</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/KiawhiteX.jpg')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">KIA XCEED 2020</h5>
                    <p class="card-text">
                      <li>TYPE: HATCHBACK</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/kiagreyrio.png')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">KIA RIO 2022</h5>
                    <p class="card-text">
                      <li>TYPE: HATCHBACK</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/kiadarkcarnival.webp')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CARNIVAL 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/kiagreyS.png')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">STONIC 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/kiasportageblue.jpeg')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">SPORTAGE 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/kiawhitesedona.webp')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">SEDONA 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 7SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <!--  -->
            </div>
          </div>
        </div>
      </div>
      <!-- KIA -->

      <!-- TOYOTA -->
      <div class="accordion-item">
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="owl-carousel owl-theme">
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/toyotagrswhite.png')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">VIOS GRS 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SEDAN</li>
                      <li>BRAND: VIOS</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/camrywhite.webp')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CAMRY 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SEDAN</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/toyota-yaris-blue.png')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">YARIS 2021</h5>
                    <p class="card-text">
                      <li>TYPE: HATCHBACK</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/toyotawigoyellow.jpg')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">WIGO 2022</h5>
                    <p class="card-text">
                      <li>TYPE: HATCHBACK</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/toyotafortunerblack.png')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">FORTUNER GRS 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/toyota-veloz-white.webp')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">VELOZ 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/toyota-avanza-black.jpeg')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">AVANZA 2O22</h5>
                    <p class="card-text">
                      <li>TYPE: MPV</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/toyotainnovadviolet.webp')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">INNOVA 2022</h5>
                    <p class="card-text">
                      <li>TYPE: MPV</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/toyotahiacepanelwhite.jpeg')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">LITE ACE 2022</h5>
                    <p class="card-text">
                      <li>TYPE: VAN</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 2 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/toyotahiacegrey.jpeg')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">SUPER GRANDIA 2022</h5>
                    <p class="card-text">
                      <li>TYPE: VAN</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 10 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/toyotahiluxblue.jpg')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">HILUX 2022</h5>
                    <p class="card-text">
                      <li>TYPE: PICK-UP</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/toyotahiluxgrsgrey.jpg')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">HILUX GRS 2022</h5>
                    <p class="card-text">
                      <li>TYPE: PICK-UP</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- TOYOTA -->
      <!-- HONDA -->
      <div class="accordion-item">
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" data-aos="fade-down">
          <div class="accordion-body">
            <div class="owl-carousel owl-theme">


              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/hondacivicryellow.jpg')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CIVIC TYPE R 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SEDAN</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/hondaaccorddgreen.png')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">ACCORD HYBRID 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SEDAN</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/hondacitygrey.webp')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CITY RS 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SEDAN</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/Honda-civic hatchback-red.png')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CIVIC HATCHBACK 2023</h5>
                    <p class="card-text">
                      <li>TYPE: HATCHBACK</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/hondabrvbrown.jpg')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">BR-V 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/hondahrvgreen.webp')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">HR-V 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/honda-crv-grey.jpg')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CR-V 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('images/hondacrvhybridred2.png')); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CR-V HYBRID 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>Price</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- HONDA -->

      <!-- 1 -->
    </div>
  </div>
  <!-- 1 -->

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
                  <div class="icon"><i class="fa fa-facebook-f" style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                  <span style="color: #4400ff">Facebook</span>
                </a>
                <a class="button" href="#foorear">
                  <div class="icon"><i class="fa fa-instagram" style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                  <span style="color: #833AB4">Instagram</span>
                </a>
                <a class="button" href="#foorear">
                  <div class="icon"><i class="fa fa-twitter" style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                  <span style="color: #1DA1F2">Twitter</span>
                </a>
                <a class="button" href="#foorer">
                  <div class="icon"><i class="fa fa-youtube-play" style=" font-size:34px;color:rgb(255, 255, 255)"></i></div>
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



  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
    $(document).ready(function(){
        $("#myCarousel").owlCarousel({
            items: 3,
            loop: true,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
        });
    });
</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 3,
          nav: false
        },
        1000: {
          items: 5,
          nav: true,
          loop: false
        }
      }
    })
  </script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script>
    window.onscroll = function() {
      var header = document.getElementById("header");
      if (window.pageYOffset > 0) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    };
  </script>

</body>


</html><?php /**PATH C:\Users\Sharynel\Desktop\capstone\programmerist\resources\views//carmodel.blade.php ENDPATH**/ ?>