@extends('layouts.app')

<link href="{{ asset('css/carmodel.css') }}" rel="stylesheet">

@section('content')
<div>
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
                  <img src="{{ asset('images/Kiasred.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">KIA SOLUTO 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SEDAN</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱2,000/Day</h5>
                    </p>
           
                    {{-- <a  href="{{ url('/checkout')}} " class="btn btn-primary">Book</a> --}}

                    <form action="/session" method="POST">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <button type="submit" id="checkout-live-button">BOOK NOW</button>
                    </form>
                  
                  
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/KIAGOLDST4.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title-K1">KIA STINGER 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SEDAN</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱10,000/Day</h5>
                    </p>


                    <form action="/anotherSession" method="POST">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <button type="submit" id="checkout-live-button">BOOK NOW</button>
                    </form>
                  
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/KiawhiteX.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">KIA XCEED 2020</h5>
                    <p class="card-text">
                      <li>TYPE: HATCHBACK</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱ 3,800/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/kiagreyrio.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">KIA RIO 2022</h5>
                    <p class="card-text">
                      <li>TYPE: HATCHBACK</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱1,800/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/kiadarkcarnival.webp')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CARNIVAL 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>₱5,000/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/kiagreyS.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">STONIC 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱2,800/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/kiasportageblue.jpeg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">SPORTAGE 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱2,800/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/kiawhitesedona.webp')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">SEDONA 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: KIA</li>
                      <li>CAPACITY: 7SEATERS</li>
                    <h5>₱5,500/Day</h5>
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
                  <img src="{{ asset('images/toyotagrswhite.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">VIOS GRS 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SEDAN</li>
                      <li>BRAND: VIOS</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱4,500/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/camrywhite.webp')}}" class="card-img-top" alt="...">
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
                  <img src="{{ asset('images/toyota-yaris-blue.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">YARIS 2021</h5>
                    <p class="card-text">
                      <li>TYPE: HATCHBACK</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱4,800/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/toyotawigoyellow.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">WIGO 2022</h5>
                    <p class="card-text">
                      <li>TYPE: HATCHBACK</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱1,800/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/toyotafortunerblack.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">FORTUNER GRS 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>₱4,900/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/toyota-veloz-white.webp')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">VELOZ 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>₱3,500/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/toyota-avanza-black.jpeg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">AVANZA 2O22</h5>
                    <p class="card-text">
                      <li>TYPE: MPV</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>Pric₱4,800/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/toyotainnovadviolet.webp')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">INNOVA 2022</h5>
                    <p class="card-text">
                      <li>TYPE: MPV</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>₱4,800/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/toyotahiacepanelwhite.jpeg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">LITE ACE 2022</h5>
                    <p class="card-text">
                      <li>TYPE: VAN</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 2 SEATERS</li>
                    <h5>₱5,500/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/toyotahiacegrey.jpeg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">SUPER GRANDIA 2022</h5>
                    <p class="card-text">
                      <li>TYPE: VAN</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 10 SEATERS</li>
                    <h5>₱6,000/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/toyotahiluxblue.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">HILUX 2022</h5>
                    <p class="card-text">
                      <li>TYPE: PICK-UP</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱4,200/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/toyotahiluxgrsgrey.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">HILUX GRS 2022</h5>
                    <p class="card-text">
                      <li>TYPE: PICK-UP</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱4,400/Day</h5>
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
                  <img src="{{ asset('images/hondacivicryellow.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CIVIC TYPE R 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SEDAN</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱7,000/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/hondaaccorddgreen.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">ACCORD HYBRID 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SEDAN</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱8,000/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/hondacitygrey.webp')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CITY RS 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SEDAN</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱4,400/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/Honda-civic hatchback-red.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CIVIC HATCHBACK 2023</h5>
                    <p class="card-text">
                      <li>TYPE: HATCHBACK</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 5 SEATERS</li>
                    <h5>₱3,800/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/hondabrvbrown.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">BR-V 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>₱4,450/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/hondahrvgreen.webp')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">HR-V 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>₱4,500/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/honda-crv-grey.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CR-V 2023</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>₱4,550/Day</h5>
                    </p>
                    <a href="#" class="btn btn-primary">BOOK NOW</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('images/hondacrvhybridred2.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CR-V HYBRID 2022</h5>
                    <p class="card-text">
                      <li>TYPE: SUV</li>
                      <li>BRAND: HONDA</li>
                      <li>CAPACITY: 7 SEATERS</li>
                    <h5>₱4,600/Day</h5>
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
  </div>
  



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
        integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script>$('.owl-carousel').owlCarousel({
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
        })</script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
      <script>
        window.onscroll = function () {
          const header = document.getElementById("header");
          if (window.pageYOffset > 0) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        };
      </script>
  </script>
  

@endsection