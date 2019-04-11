@extends('layouts.app')

@section('content')

{{-- <div class="jumbotron text-center ">
    
        <h1>Welcome to Best buy</h1> 
        <p>We are here to meet your demands</p> 
      </div> --}}

      <div id="demo" class="carousel slide" data-ride="carousel" style="padding-top:50px; padding-bottom:50px; ">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
              <li data-target="#demo" data-slide-to="3"></li>
              <li data-target="#demo" data-slide-to="4"></li>
            </ul>
            <div class="container"> 
            <!-- The slideshow -->
            <div class="carousel-inner ">
              <div class="carousel-item active">
                <img  src="{{asset('images/carol_1.jpg')}} " width="100%" height="300" alt="Los Angeles">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/carol_2.jpg')}} "  width="100%" height="300" alt="Chicago">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/carol_3.jpg')}} "  width="100%" height="300" alt="New York">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/carol_4.jpg')}} "  width="100%" height="300" alt="New York">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/gen.jpg')}} "  width="100%" height="300" alt="New York">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/slidder.jpg')}} "  width="100%" height="300" alt="New York">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/test.jpg')}} "  width="100%" height="300" alt="New York">
              </div>

             
            </div>
          </div>
          
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          
          </div>

          {{--  cards --}}
<div class="card-columns"  >
  <div class="card bg-light"  >
    <div class="card-body text-center" >
      <img src="{{asset('product/belts.png')}} " width="150" height="80" alt="belt">
      <p class="card-text">men's belt</p>
    </div>
  </div>
  <div class="card bg-light"  >
    <div class="card-body text-center" >
        <img src="{{asset('product/fagraces.png')}} " width="150" height="80" alt="">
      <p class="card-text">Frangraces</p>
    </div>
  </div>
  <div class="card bg-light" >
    <div class="card-body text-center" >
          <img src="{{asset('product/men_clothes.png')}} " width="150" height="80" alt="">          
      <p class="card-text">Men's clothes</p>
    </div>
  </div>
  <div class="card bg-light"  >
    <div class="card-body text-center" >
          <img src="{{asset('product/sphones.png')}} " width="150" height="80" alt="">  
      <p class="card-text">Mobile phones</p>
    </div>
  </div> 
  <div class="card bg-light" >
    <div class="card-body text-center" >
          <img src="{{asset('product/women_clothes.png')}} " width="150" height="80" alt="">  
      <p class="card-text">Women clothes</p>
    </div>
  </div>
  <div class="card bg-light" >
    <div class="card-body text-center">
          <img src="{{asset('product/refrigerator.png')}} " width="150" height="80" alt="">  
      <p class="card-text"> Refregerator</p>
    </div>
  </div>
  <div class="card bg-light" >
    <div class="card-body text-center">
          <img src="{{asset('product/computing.png')}} " width="150" height="80" alt="">  
      <p class="card-text"> laptops</p>
    </div>
  </div>
  <div class="card bg-light" >
    <div class="card-body text-center">
          <img src="{{asset('product/furniture.png')}} " width="150" height="80" alt="">  
      <p class="card-text"> Furnitures</p>
    </div>
  </div>
  <div class="card bg-light" >
    <div class="card-body text-center">
          <img src="{{asset('product/lighting.jpg')}} " width="150" height="80" alt="">  
      <p class="card-text"> Lighting</p>
    </div>
  </div>
</div>

{{-- big card bord --}}
<div class="card-deck">
    <div class="card ">
      <div class="card-body text-center">
        <img src="{{asset('product/DOUBLE_BANNER2.jpg')}} "  width="500" height="200" alt="">
        {{-- <p class="card-text">Some text inside the first card</p> --}}
      </div>
    </div>
    <div class="card ">
      <div class="card-body text-center">
          <img src="{{asset('product/DOUBLE_BANNER4.jpg')}} " width="500" height="200" alt="">
        {{-- <p class="card-text">Some text inside the second card</p> --}}
      </div>
    </div>
  
    </div> 
    

<div class="card " style="background-color:red;">
      <div class="card-header"><h6  style="color:white; float:left"> Deals of the day</h6>  <h6  style="color:white; float:right"> Avaliable while stock last >>>></h6></div>

    </div>

    {{-- card 2 --}}

    <div class="card-columns">
          <div class="card bg-light">
            <div class="card-body text-center">
              <img src="{{asset('product/shoe.png')}} " width="200" height="200" alt="belt">
              <p class="card-text"> Men shoe</p>
              <h6>₦5200.00</h6>
            </div>
          </div>
          <div class="card bg-light">
            <div class="card-body text-center">
                <img src="{{asset('product/walk_about.png')}} " width="200" height="200" alt="">
              <p class="card-text">Walk about</p>
              <h6> ₦ 3700.00</h6>
              
            </div>
          </div>
          <div class="card bg-light">
            <div class="card-body text-center">
                  <img src="{{asset('product/gionee.jpg')}} " width="200" height="200" alt="">          
              <p class="card-text">Gionee f106 </p>
              <h6> ₦ 39500.00</h6>
            </div>
          </div>
      
        </div>

        <div class="card " style="background-color:blue;">
          <div class="card-header"><h6  style="color:white; float:left"> stock</h6>  <h6  style="color:white; float:right"> Avaliable while stock last >>>></h6></div>
        </div>

        <div class="card-columns">
          <div class="card bg-light">
            <div class="card-body text-center">
              <img src="{{asset('product/hisense.jpg')}} " width="200" height="200" alt="belt">
              <p class="card-text"> Hisense</p>
              <h6>₦ 51200.00</h6>
            </div>
          </div>
          <div class="card bg-light">
            <div class="card-body text-center">
                <img src="{{asset('product/konka.jpg')}} " width="200" height="200" alt="">
              <p class="card-text">konka</p>
              <h6> ₦ 39200.00</h6>
              
            </div>
          </div>
          <div class="card bg-light">
            <div class="card-body text-center">
                  <img src="{{asset('product/gionee.jpg')}} " width="200" height="200" alt="">          
              <p class="card-text">Gionee f106 </p>
              <h6> ₦ 39500.00</h6>
            </div>
          </div>
      
        </div>
    
        <div class="card " style="background-color:slateblue;">
          <div class="card-header"><h6  style="color:white; float:left"> from database</h6>  <h6  style="color:white; float:right"> you also like this >>>></h6></div>
        </div>

        <div class="row justify-content-lg-start justify-content-md-start" style="padding-top:20px;">
          @foreach ($products as $product)
        
          <div class="col-md-4 col-lg-3 col-sm-12">  
            <div class="card mb-3 shadow-sm">
             <a href="{{route('product_view',$product->slug)}} ">    <img  class="bd-placeholder-img " src="{{asset('product/'.$product->slug.'.jpg')}} " width="200" height="200" alt=""> </a> 
              <div class="card-body">
               <a href="{{route('product_view', $product->slug)}} "> <p class="card-text">{{$product->name}} </p></a>
            <p>{{$product->details}} </p>
            <p>{{$product->description}} </p>
            <h3>₦ {{$product->presentPrice()}} </h3>
                <div class="d-flex justify-content-between align-items-center">
                  
                  <small class="text-muted" id="vid-{{@index}}"></small>
                </div>
              </div>
            </div>
          </div>
       
          @endforeach
        </div>

        {{-- testing.. content --}}
        
@endsection
{{-- 
<div class="col-md-4 col-lg-3 col-sm-12">
  <div class="card mb-3 shadow-sm">
<div class="card-columns">
<div class="card bg-light">
  <div class="card-body text-center">
        <img src="{{asset('cards/gionee.jpg')}} " width="200" height="200" alt="">          
    <p class="card-text">{{$product->name}} </p>
    <h6>{{$product->price}} </h6>
    <p>{{$product->details}} </p>
    <p>{{$product->description}} </p>
  </div>
</div>
</div>
  </div>
</div> --}}
      