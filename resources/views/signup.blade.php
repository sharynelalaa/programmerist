<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>G'Five Rentals</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css"
    integrity="sha512-b42SanD3pNHoihKwgABd18JUZ2g9j423/frxIP5/gtYgfBz/0nDHGdY/3hi+3JwhSckM3JLklQ/T6tJmV7mZEw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
  
</head>

<body>
  <nav class="navbar navbar-expand-lg" id="navcolor">
    <div class="container-fluid">
      <div class="caret">
        <a class="btn" href="{{ url('/')}}" role="button" id="navcolor">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
            <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
          </svg>
          <!-- <svg xmlns="http://www.w3.org/5000/svg" width="30" height="30" fill="currentColor"
            class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
            <path
              d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
          </svg> -->
        </a>
      </div>
      <div class="mx-auto">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('./images/G5-Logo-B-White-on-Black-Border-V1.png') }}" alt="Logo" width="200" height="100"
            class="d-inline-block align-text-top">
        </a>
      </div>

    </div>

  </nav>
  <div class="container-fluid bg-opacity-75">
    <div class="row px-5">
      <div class="col my-5">
        <div class="h3 text-left big-info">Create an account</div>
        <form>
          <div class="mb-3 w-75 p-1 my-4">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3 w-75 p-1">
            <input type="firstName" class="form-control" id="exampleInputFirstName" placeholder="First Name">
          </div>
          <div class="mb-3 w-75 p-1">
            <input type="lastName" class="form-control" id="exampleInputLastName" placeholder="Last Name">
          </div>
          <div class="mb-3 w-75 p-1">
            <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
            <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
          </div>
          <p class="w-75">Selecting this checkbox will keep you signed into your account on this device until
            you
            sign out. Do not select this on shared devices.</p>
          <p class="w-75">By creating an account, I agree to the
            <a href="#" class="text-decoration-none">GFive Rentals Terms and Conditions</a>, <a href="#"
              class="text-decoration-none">Privacy Statement</a> and <a href="#" class="text-decoration-none">GFive
              Rentals Rewards Terms and Conditions.</a>
          </p>
          <button type="submit" class="btn btn-dark w-75">Continue</button>
        </form>
      </div>
      <div class="col my-5">
        <div class="row my-5">
          <div class="row">
            <p>Already have an account? <a href="#" class="text-decoration-none">Sign in</a></p>
            <p>or continue with</p>
            <div class="row mx-5">
              <div type="button" href="#" class="icon facebook col-1">
                <span><i class="bi bi-facebook"></i></span>
              </div>
              <div type="button" href="#" class="icon instagram col-2">
                <span><i class="bi bi-instagram"></i></span>
              </div>
              <div type="button" href="#" class="icon twitter col-3">
                <span><i class="bi bi-twitter"></i></span>
              </div>
              <div type="button" href="#" class="icon youtube col-3">
                <span><i class="bi bi-youtube"></i></span>
              </div>
              <div type="button" href="#" class="icon google col-4">
                <span><i class="bi bi-google"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide my-5" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('./images/a.jpg') }}" class="d-block w-75">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('./images/b.jpg') }}" class="d-block w-75">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('./images/c.jpg') }}" class="d-block w-75">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('./images/d.jpg') }}" class="d-block w-75">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('./images/e.jpg') }}" class="d-block w-75">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('./images/f.jpg') }}" class="d-block w-75">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('./images/g.jpg') }}" class="d-block w-75">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('./images/h.jpg') }}" class="d-block w-75">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('./images/i.jpg') }}" class="d-block w-75">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('./images/j.jpg') }}" class="d-block w-75">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('./images/k.jpg') }}" class="d-block w-75">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('./images/l.jpg') }}" class="d-block w-75">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('./images/m.jpg') }}" class="d-block w-75">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('./images/n.jpg') }}" class="d-block w-75">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('./images/o.jpg') }}" class="d-block w-75">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>