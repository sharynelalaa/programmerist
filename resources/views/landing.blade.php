@extends('layouts.app')

<link href="{{ asset('css/landing.css') }}" rel="stylesheet">

@section('content')
<div class="banner">
    <div class="slider">
        <img src="{{ asset('./images/10.jpg') }}" alt="" id="slideimg" />
    </div>
    <div class="overlay">        
        <div class="content2">
            <div>
                <h1>PLANNING FOR</h1>
                <h1>YOUR NEXT <span>TRIP</span>?</h1>
                <p>Drive your dream car with affordable rates!</p>

                <div class="rentnow">
                    <button
                        type="button"
                        class="btn-1"
                        href="{{ url('/signup') }}"
                    >
                        RENT NOW
                    </button>
                    <button
                        type="button"
                        class="btn-2"
                        href="{{ url('/carmodel') }}"
                    >
                        OUR VEHICLES
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
                var slideimg = document.getElementById("slideimg");
                var images = new Array(
                    "./images/10.jpg",
                    "./images/6.jpg",
                    "./images/5.jpg",
                    "./images/7.jpg",
                    "./images/2.jpg"
                );

                var len = images.length;
                var i = 0;

                function slider() {
                    if (i > len - 1) {
                        i = 0;
                    }
                    slideimg.src = images[i];
                    i++;
                    setTimeout("slider()", 3000);
                }
            </script>
           


@endsection