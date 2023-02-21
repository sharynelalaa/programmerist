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
  <link href="{{ asset('css/carmodel.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>G'Five Rentals</title>
</head>

<body>
  {{-- <div class="container-fluid" id="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/')}}">
  <img src="{{ asset('./images/G5-Logo-B-White-on-Black-Border-V1.png') }}" alt="Logo" width="200" height="100" class="d-inline-block align-text-top">
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <p>Don't have an account? <a href="{{ url('/signup') }}" class="text-decoration-none" style="color: blue;">Create
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
              <h5><a href="{{ url('/underconstruction') }}" class="text-decoration-none justify-left">Feedback</a></h5>
            </div>
          </div>
        </div>
      </div>

    </form>

  </div>
  </nav>

  </div>

  --}}

  <form action="/anotherSession" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" id="checkout-live-button">Checkout</button>
  </form>













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


</html>