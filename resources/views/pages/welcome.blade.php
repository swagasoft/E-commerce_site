@extends('layouts.app')

@section('content')

{{-- <div class="jumbotron text-center ">
    
        <h1>Welcome to Best buy</h1> 
        <p>We are here to meet your demands</p> 
      </div> --}}

      <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
          
            <!-- The slideshow -->
            <div class="carousel-inner ">
              <div class="carousel-item active">
                <img  src="{{asset('images/carol_1.jpg')}} " width="600" height="300" alt="Los Angeles">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/carol_2.jpg')}} "  width="600" height="300" alt="Chicago">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/carol_3.jpg')}} "  width="600" height="300" alt="New York">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/carol_4.jpg')}} "  width="600" height="300" alt="New York">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/gen.jpg')}} "  width="600" height="300" alt="New York">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/slidder.jpg')}} "  width="600" height="300" alt="New York">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/test.jpg')}} "  width="600" height="300" alt="New York">
              </div>

              <h1> testing ....</h1>
            </div>
          
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          
          </div>
@endsection

           
      